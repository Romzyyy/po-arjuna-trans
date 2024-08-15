<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_layanan extends Model
{
    use HasFactory;

    protected $table = 'Trans_Layanan';
    public $timestamps = true;

    protected $fillable = [
        'Judul_Halaman',
        'Keterangan_Umum',
        'Wa',
        'Total_Pelanggan',
        'Total_Pelanggan_Terlayani',
        'Gambar',
        'Gambar1',
        'Gambar2',
    ];
}
