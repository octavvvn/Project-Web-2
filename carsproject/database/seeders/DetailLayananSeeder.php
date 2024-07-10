<?php

namespace Database\Seeders;
use App\Models\DetailLayanan;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailLayanan::create(['pekerjaan' => 'Penggantian oli mesin', 'biaya' => 150000, 'layanan_id' => 1, 'pj_montir_id' => 1]);
        DetailLayanan::create(['pekerjaan' => 'Pemeriksaan dan perawatan rutin', 'biaya' => 250000, 'layanan_id' => 2, 'pj_montir_id' => 2]);
    }
}
