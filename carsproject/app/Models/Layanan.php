<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi',
        'total_biaya',
        'rating'
    ];
    public function detailLayanans()
    {
        return $this->hasMany(DetailLayanan::class);
    }
}
