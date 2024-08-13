<?php

namespace Database\Seeders;

use App\Models\Positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Positions::create([
            'position_name' => 'Kepala Desa',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Sekretaris Desa',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Seksi Pemerintahan',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Seksi Kesejahteraan',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Seksi Pelayanan',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Urusan Tata Usaha dan Umum',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Urusan Keuangan',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Urusan Perencanaan',
            'is_single_used' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Positions::create([
            'position_name' => 'Kepala Dusun',
            'is_single_used' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
