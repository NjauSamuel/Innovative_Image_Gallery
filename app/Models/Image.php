<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Image extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'gallery_id', 'caption'
    ];
    

    public function gallery(): BelongsTo
    {
        return $this->belongsTo(Gallery::class);
    }

    public function reactions(): HasMany
    {
        return $this->hasMany(ImageUserReaction::class);
    }

}
