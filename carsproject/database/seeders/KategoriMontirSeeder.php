<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriMontir;

class KategoriMontirSeeder extends Seeder
{
    public function run(): void
    {
        KategoriMontir::create([
            'nama' => 'Mesin',
            'deskripsi' => 'Ahli dalam perbaikan mesin'
        ]);

        KategoriMontir::create([
            'nama' => 'Body',
            'deskripsi' => 'Ahli dalam perbaikan body kendaraan'
        ]);
    }
}
