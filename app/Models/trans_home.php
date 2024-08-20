<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_home extends Model
{
    use HasFactory;

    protected $table = 'Trans_Home';
    public $timestamps = true;

    protected $fillable = [
        'Nama_Travel',
        'Slogan',
        'Wa',
        'Logo',
        'Home',
    ];
}
