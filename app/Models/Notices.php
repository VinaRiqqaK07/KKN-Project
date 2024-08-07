<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Notices extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function getImageUrlNotices(): ?string
    {
        return $this->getFirstMediaUrl();
    }
}
