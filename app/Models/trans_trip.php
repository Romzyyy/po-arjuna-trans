<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_trip extends Model
{
    use HasFactory;

    protected $table = 'Trans_Trip';
    public $timestamps = true;

    protected $fillable = [
        'Judul_Halaman',
        'Wa',
        'Jadwal_Trip'
    ];
}
