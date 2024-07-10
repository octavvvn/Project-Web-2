<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Montir extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'gender',
        'tgl_lahir',
        'tmp_lahir',
        'keahlian',
        'kategori_montir_id'
    ];

    public function kategoriMontir()
    {
        return $this->belongsTo(KategoriMontir::class);
    }
}
