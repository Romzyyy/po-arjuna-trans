<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketLayanan extends Model
{
    use HasFactory;

    protected $table = 'Paket_Layanan';
    public $timestamps = false;

    protected $fillable = [
        'Nama_Layanan',
        'Gambar',
        'Keterangan'
    ];
}
