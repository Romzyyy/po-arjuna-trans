<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_short_video extends Model
{
    use HasFactory;

    protected $table = 'Trans_Short_Video';
    public $timestamps = false;

    protected $fillable = [
       'Judul_Halaman',
       'Youtube',
       'Instagram',
       'Tiktok',
       'Facebook',
       'Short_Video'
    ];
}
