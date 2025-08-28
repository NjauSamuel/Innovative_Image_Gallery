<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// database/seeders/IconAndCategorySeeder.php
use App\Models\Icon;
use App\Models\GalleryCategory;

class IconAndCategorySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Nature', 'fa-solid fa-leaf'],
            ['Travel', 'fa-solid fa-plane'],
            ['Food & Drinks', 'fa-solid fa-utensils'],
            ['Art & Design', 'fa-solid fa-palette'],
            ['Fashion & Style', 'fa-solid fa-shirt'],
            ['Photography', 'fa-solid fa-camera'],
            ['Technology', 'fa-solid fa-microchip'],
            ['Architecture', 'fa-solid fa-building'],
            ['Sports', 'fa-solid fa-football'],
            ['Music', 'fa-solid fa-music'],
            ['Animals & Pets', 'fa-solid fa-dog'],
            ['Cars & Motorbikes', 'fa-solid fa-car'],
            ['Books & Literature', 'fa-solid fa-book'],
            ['Education', 'fa-solid fa-graduation-cap'],
            ['Fitness', 'fa-solid fa-heart-pulse'],
            ['Home & Living', 'fa-solid fa-couch'],
            ['Events & Celebrations', 'fa-solid fa-calendar-days'],
            ['Quotes & Inspiration', 'fa-solid fa-quote-left'],
            ['DIY & Crafts', 'fa-solid fa-scissors'],
            ['Gaming', 'fa-solid fa-gamepad'],
            ['Movies & TV', 'fa-solid fa-film'],
            ['Space & Astronomy', 'fa-solid fa-moon'],
            ['Science & Innovation', 'fa-solid fa-flask'],
            ['History & Culture', 'fa-solid fa-landmark'],
            ['Beauty & Makeup', 'fa-solid fa-face-smile'],
            ['Kids & Family', 'fa-solid fa-children'],
            ['City Life', 'fa-solid fa-city'],
            ['Gardening', 'fa-solid fa-seedling'],
            ['Ocean & Beaches', 'fa-solid fa-water'],
            ['Adventure & Hiking', 'fa-solid fa-person-hiking'],
            ['Winter & Snow', 'fa-solid fa-snowflake'],
            ['Autumn & Harvest', 'fa-solid fa-tree'],
            ['Spring & Flowers', 'fa-solid fa-spa'],
            ['Abstract Art', 'fa-solid fa-shapes'],
            ['Minimalism', 'fa-solid fa-border-all'],
            ['Black & White', 'fa-solid fa-circle-half-stroke'],
            ['Street Photography', 'fa-solid fa-road'],
            ['Wildlife', 'fa-solid fa-otter'],
            ['Festivals', 'fa-solid fa-masks-theater'],
            ['Travel Photography', 'fa-solid fa-earth-americas'],
            ['Man', 'fa-solid fa-person'],
            ['Woman', 'fa-solid fa-person-dress'],
            ['Animation', 'fa-solid fa-film'],
            ['Lofi', 'fa-solid fa-headphones'],
            ['Motor Bikes', 'fa-solid fa-motorcycle'],
            ['Backgrounds', 'fa-solid fa-image'],
            ['Feelings', 'fa-solid fa-face-smile'],
            ['Health', 'fa-solid fa-heart-pulse'],
            ['People', 'fa-solid fa-users'],
            ['Religion', 'fa-solid fa-place-of-worship'],
            ['Places', 'fa-solid fa-map-location-dot'],
            ['Industry', 'fa-solid fa-industry'],
            ['Transportation', 'fa-solid fa-bus'],
            ['Buildings', 'fa-solid fa-building'],
            ['Business', 'fa-solid fa-briefcase'],
            ['Other', 'fa-solid fa-folder-open']
        ];

        foreach ($items as [$category, $class]) {
            $icon = Icon::create([
                'name' => $category,
                'class' => $class
            ]);

            GalleryCategory::create([
                'name' => $category,
                'icon_id' => $icon->id
            ]);
        }
    }
}

