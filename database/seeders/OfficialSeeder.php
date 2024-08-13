<?php

namespace Database\Seeders;

use App\Models\Officials;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Officials::create([
            'position_id' => 2,
            'official_name' => 'Mustari, S.Pd.I',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Officials::create([
            'position_id' => 3,
            'official_name' => 'Djumatang',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Officials::create([
            'position_id' => 4,
            'official_name' => 'Saheruddin, S.Pd.I',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
