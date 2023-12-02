<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mobil::create([
            'nama_mobil' => 'Xenia',
            'brand_mobil' => 'Daihatsu',
            'warna_mobil' => 'Merah',
            'tipe_mobil' => 'MPV',
            'harga_mobil' => 200000000,
        ]);
    }
}
