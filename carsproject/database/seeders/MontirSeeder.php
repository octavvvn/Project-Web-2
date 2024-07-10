<?php

namespace Database\Seeders;
use App\Models\Montir;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MontirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Montir::create(['kode' => 'MT001', 'nama' => 'Jodie', 'gender' => 'L', 'tgl_lahir' => '1996-01-01', 'tmp_lahir' => 'Jakarta', 'keahlian' => 'Mesin', 'kategori_montir_id' => 1]);
        Montir::create(['kode' => 'MT002', 'nama' => 'Badra', 'gender' => 'L', 'tgl_lahir' => '1995-09-09', 'tmp_lahir' => 'Bandung', 'keahlian' => 'Mesin', 'kategori_montir_id' => 2]);
    }
}
