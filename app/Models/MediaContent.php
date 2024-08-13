<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class MediaContent extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $guarded = [];

    public function getImageUrl(): ?string
    {
        return $this->getFirstMediaUrl();
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if($model->type === 'struktur') {
                $exists = self::where('type', 'struktur')
                    ->where('id', '!=', $model->id)
                    ->exists();
                
                if ($exists) {
                    throw new \Exception('Tipe Struktur hanya dapat digunakan sekali. Silakan mengedit atau menghapus data sebelumnya');
                }
            }
        });
    }
}
