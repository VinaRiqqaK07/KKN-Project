<?php

namespace Database\Seeders;

use App\Models\MediaContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        MediaContent::create([
            'type' => 'banner',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        MediaContent::create([
            'title' => 'Banner Dua',
            'type' => 'banner',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        MediaContent::create([
            'title' => 'Struktur Pertama',
            'type' => 'struktur',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
