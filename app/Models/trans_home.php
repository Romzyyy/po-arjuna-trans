<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_home extends Model
{
    use HasFactory;

    protected $table = 'Trans_Home';
    public $timestamps = false;

    protected $fillable = [
        'Nama_Travel',
        'Nama_Travel1',
        'Slogan',
        'Wa',
        'Logo',
        'Home',
    ];
}
