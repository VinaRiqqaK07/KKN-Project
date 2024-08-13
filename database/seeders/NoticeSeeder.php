<?php

namespace Database\Seeders;

use App\Models\Notices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Notices::create([
            'id' => 3,
            'users_id' => 1,
            'title' => 'Wisata Desa Telah Dibuka',
            'notice_location' => 'Pangalawakkang',
            'notice_date' => now(),
            'content' => "<h2>MARI BERWISATA</h2><p>Wisata Pangalawakkang telah dibuka. Biaya masuk gratis untuk pekan pembukaan. Mari meramaikan!</p>",
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
