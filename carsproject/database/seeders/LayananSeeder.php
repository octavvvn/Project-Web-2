<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run()
    {
        Layanan::create([
            'kode' => 'LN001',
            'nama' => 'Agam Priambada',
            'deskripsi' => 'Penggantian oli mesin',
            'total_biaya' => 1500000,
            'rating' => 4
        ]);
        Layanan::create([
            'kode' => 'LN002',
            'nama' => 'Ruby Jane',
            'deskripsi' => 'Perawatan dan perbaikan sistem rem',
            'total_biaya' => 12000000,
            'rating' => 5
        ]);
    }
}
