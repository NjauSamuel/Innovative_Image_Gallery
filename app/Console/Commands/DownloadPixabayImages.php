<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Image;
use Illuminate\Support\Str;

class DownloadPixabayImages extends Command
{
    protected $signature = 'pixabay:download-media';
    protected $description = 'Download images from Pixabay and import into the Sudo_Master gallery.';

    public function handle()
    {
        $apiKey = config('services.pixabay.key');
        $baseUrl = 'https://pixabay.com/api/';
        $imagesPerPage = 200; // Accepted Range 3 - 200

        if (!$apiKey) {
            $this->error('❌ No Pixabay API key found. Please set PIXABAY_KEY in your .env file.');
            return 1;
        }

        // Find the sudo user
        $user = User::where('email', 'njaus602@gmail.com')->first();
        if (!$user) {
            $this->error("❌ User with email njaus602@gmail.com not found.");
            return 1;
        }

        // Ensure the gallery exists
        $gallery = Gallery::firstOrCreate(
            ['user_id' => $user->id, 'title' => 'Sudo_Master'],
            ['description' => 'Master gallery seeded from Pixabay', 'is_public' => true]
        );

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

        // $categories = GalleryCategory::all();

        // Use this (resume from ID 5 onwards)
        $categories = GalleryCategory::where('id', '>=', 10)->get();

        $notFound = [];

        foreach ($categories as $category) {
            $queryName = $categoryMappings[$category->name] ?? $category->name;

            $this->info("📸 Fetching images for: {$category->name} (searching: {$queryName})");

            $response = Http::get($baseUrl, [
                'key' => $apiKey,
                'q' => $queryName,
                'image_type' => 'photo',
                'orientation' => 'vertical',
                'per_page' => $imagesPerPage,
                'safesearch' => 'true',
            ]);

            if ($response->failed()) {
                $this->error("❌ Request failed for {$category->name}");
                Log::error("Pixabay request failed", [
                    'category_id' => $category->id,
                    'category_name' => $category->name,
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                continue;
            }

            $data = $response->json();

            if (empty($data['hits'])) {
                $this->warn("⚠️ No results for {$category->name} ({$queryName})");
                $notFound[] = "{$category->name} => {$queryName}";
                continue;
            }

            foreach ($data['hits'] as $hit) {
                $imageUrl = $hit['largeImageURL'] ?? $hit['webformatURL'];
                $caption = $hit['tags'] ?? "Pixabay - {$category->name}";

                // Prevent duplicates by checking if an image with same pixabay ID exists
                $existing = Image::where('gallery_id', $gallery->id)
                    ->where('gallery_category_id', $category->id)
                    ->where('caption', $caption)
                    ->first();

                if ($existing) {
                    $this->warn("⏩ Skipping duplicate: {$caption}");
                    continue;
                }

                try {
                    // Truncate caption to 255 characters (fits string column)
                    $safeCaption = Str::limit($caption, 255, '');
                
                    // Create the image model
                    $image = Image::create([
                        'gallery_id' => $gallery->id,
                        'gallery_category_id' => $category->id,
                        'caption' => $safeCaption,
                    ]);
                
                    // Attach media via Spatie
                    $image->addMediaFromUrl($imageUrl)
                        ->toMediaCollection('images');
                
                    $this->info("✅ Imported: {$safeCaption}");
                } catch (\Exception $e) {
                    $this->error("❌ Failed saving image: {$e->getMessage()}");
                    Log::error("Pixabay import failed", [
                        'error' => $e->getMessage(),
                        'imageUrl' => $imageUrl,
                        'category' => $category->name,
                    ]);
                }
            }
        }

        if (!empty($notFound)) {
            $logPath = storage_path('logs/pixabay_not_found.log');
            file_put_contents($logPath, implode(PHP_EOL, $notFound) . PHP_EOL, FILE_APPEND);
            $this->warn("⚠️ Some categories returned no results. Logged to: {$logPath}");
        }

        $this->info("🎉 Import complete!");
        return 0;
    }
}
