<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_tentangkami extends Model
{
    use HasFactory;
    protected $table = 'Trans_Tentangkami';
    public $timestamps = false;

    protected $fillable = [
        'Email',
        'Sub_Judul',
        'Alamat',
        'Wa',
        'Telpon',
    ];
}
