<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_users extends Model
{
    use HasFactory;

    protected $table = 'Trans_Users';
    public $timestamps = true;

    protected $fillable = [
        'Email',
        'Username',
        'Password',
        'Level'
    ];
}
