<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GalleryCategory extends Model
{
    protected $fillable = ['name', 'icon_id'];

    public function galleries(): HasMany
    {
        return $this->hasMany(Gallery::class, 'category_id');
    }

    public function icon(): BelongsTo
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
    
}
