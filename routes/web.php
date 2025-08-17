<?php

use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/', function () {
    $activeSlug = request('category');

    $categories = GalleryCategory::with('icon')
        ->withCount('galleries')
        ->orderByDesc('galleries_count')
        ->get();

    if ($activeSlug) {
        $categories = $categories->sortByDesc(function ($category) use ($activeSlug) {
            return Str::slug($category->name) === $activeSlug ? PHP_INT_MAX : $category->galleries_count;
        });
    }

    return view('home', compact('categories', 'activeSlug'));
});

require __DIR__.'/auth.php';
