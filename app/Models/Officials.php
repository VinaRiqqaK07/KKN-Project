<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Officials extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public function positions(): BelongsTo
    {
        return $this->belongsTo(Positions::class, 'position_id');
    }

    public function getImageUrlOfficials(): ?string
    {
        return $this->getFirstMediaUrl();
    }
}
