<?php

use App\Models\GalleryCategory;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/', function () {
    $activeSlug = request('category');

    $categories = GalleryCategory::with('icon')
        ->withCount('images')
        ->orderByDesc('images_count')
        ->get();

    if ($activeSlug) {
        $categories = $categories->sortByDesc(function ($category) use ($activeSlug) {
            return Str::slug($category->name) === $activeSlug ? PHP_INT_MAX : $category->images_count;
        });
    }

    // Get first page of images for initial render
    $query = Image::query()->with('category');
    if ($activeSlug) {
        $query->whereHas('category', function ($q) use ($activeSlug) {
            $q->whereRaw("LOWER(REPLACE(name,' ','-')) = ?", [$activeSlug]);
        });
    }
    $initialImages = $query->orderByDesc('created_at')->paginate(24);

    return view('home', compact('categories', 'activeSlug', 'initialImages'));
});


Route::get('/images', function () {
    $activeSlug = request('category');
    $page = request('page', 1);

    $query = Image::query()->with('category');

    if ($activeSlug) {
        $query->whereHas('category', function ($q) use ($activeSlug) {
            $q->whereRaw("LOWER(REPLACE(name,' ','-')) = ?", [$activeSlug]);
        });
    }

    $images = $query->orderByDesc('created_at')->paginate(24, ['*'], 'page', $page);

    $html = view('partials.images', compact('images'))->render();

    return response()->json([
        'html' => $html,
        'nextPageUrl' => $images->nextPageUrl()
    ]);
});

require __DIR__.'/auth.php';
