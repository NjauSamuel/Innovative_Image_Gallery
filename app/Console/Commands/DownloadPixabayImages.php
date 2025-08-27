<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DownloadPixabayImages extends Command
{
    protected $signature = 'pixabay:download-test';
    protected $description = 'Download test images (N per category) from Pixabay and store in local folders';

    public function handle()
    {
        $apiKey = config('services.pixabay.key');
        $baseUrl = 'https://pixabay.com/api/';
        $imagesPerPage = 3; // Accepted Range 3 - 200

        if (!$apiKey) {
            $this->error('❌ No Pixabay API key found. Please set PIXABAY_KEY in your .env file.');
            return 1;
        }

        // Fallback mappings (Pixabay-friendly search terms)
        $categoryMappings = [
            'Food & Drinks' => 'Food',
            'Art & Design' => 'Art',
            'Fashion & Style' => 'Fashion',
            'Animals & Pets' => 'Animals',
            'Cars & Motorbikes' => 'Cars',
            'Books & Literature' => 'Books',
            'Health & Fitness' => 'Fitness',
            'Home & Living' => 'Home',
            'Events & Celebrations' => 'Celebration',
            'Quotes & Inspiration' => 'Quotes',
            'DIY & Crafts' => 'Crafts',
            'Movies & TV' => 'Movies',
            'Space & Astronomy' => 'Space',
            'Science & Innovation' => 'Science',
            'History & Culture' => 'History',
            'Beauty & Makeup' => 'Makeup',
            'Kids & Family' => 'Family',
            'Ocean & Beaches' => 'Beach',
            'Adventure & Hiking' => 'Hiking',
            'Winter & Snow' => 'Winter',
            'Autumn & Harvest' => 'Autumn',
            'Spring & Flowers' => 'Flowers',
            'Black & White' => 'Black and White',
        ];

        $categories = GalleryCategory::all();        
        $notFound = [];

        foreach ($categories as $category) {
            $queryName = $categoryMappings[$category->name] ?? $category->name;
            $query = urlencode($queryName);

            $this->info("📸 Fetching images for: {$category->name} (searching: {$queryName})");

            $response = Http::get($baseUrl, [
                'key' => $apiKey,
                'q' => $query,
                'image_type' => 'photo',
                'orientation' => 'vertical',
                'per_page' => $imagesPerPage,
                'safesearch' => 'true',
            ]);

            if ($response->failed()) {
                $this->error("❌ Request failed for {$category->name}");

                // Log error with more context
                Log::error("Request failed", [
                    'category_id' => $category->id,
                    'category_name' => $category->name,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                continue;
            }


            $data = $response->json();

            if (empty($data['hits'])) {
                $this->warn("⚠️ No results found for {$category->name} (query: {$queryName})");
                $notFound[] = "{$category->name} => {$queryName}";
                continue;
            }

            // Safe folder name
            $safeName = preg_replace('/[^\w\-]/', '_', $category->name);
            $folder = storage_path("app/gallery/{$safeName}");
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            foreach ($data['hits'] as $hit) {
                $imageUrl = $hit['largeImageURL'] ?? $hit['webformatURL'];
                $ext = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION) ?: 'jpg';
                $filePath = "{$folder}/{$safeName}_{$hit['id']}.{$ext}";

                try {
                    // Retry logic (3 attempts, 1 sec apart)
                    $imgData = Http::retry(3, 1000)->get($imageUrl)->body();
                    file_put_contents($filePath, $imgData);
                    $this->info("✅ Saved: {$filePath}");
                } catch (\Exception $e) {
                    $this->error("❌ Failed to save image: " . $e->getMessage());
                }
            }
        }

        // Log categories with no results
        if (!empty($notFound)) {
            $logPath = storage_path('logs/pixabay_not_found.log');
            file_put_contents($logPath, implode(PHP_EOL, $notFound) . PHP_EOL, FILE_APPEND);
            $this->warn("⚠️ Some categories returned no results. Logged to: {$logPath}");
        }

        $this->info("🎉 Download complete!");
        return 0;
    }
}
