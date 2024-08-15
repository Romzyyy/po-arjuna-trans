<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_testimoni extends Model
{
    use HasFactory;
    
    protected $table = 'Trans_Testimoni';
    public $timestamps = true;

    protected $fillable = [
        'Judul_Halaman',
        'Testimoni'
    ];

}
