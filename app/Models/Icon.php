<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Icon extends Model
{
    protected $fillable = [
        'name', 'class'
    ];

    //Relation with the gallery category table. 
    public function categories(): HasMany
    {
        return $this->hasMany(GalleryCategory::class, 'icon_id');
    }
}
