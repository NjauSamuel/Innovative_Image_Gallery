<?php

use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Route;


Route::get('/', function() {

    $categories = GalleryCategory::with('icon')->get();

    return view('home', compact('categories'));
});

require __DIR__.'/auth.php';
