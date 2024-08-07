<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class News extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia; //InteractsWithMedia Download Spatie lagii
    protected $guarded = [];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function getImageUrlNews(): ?string
    {
        return $this->getFirstMediaUrl();
    }
}
