<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integrations extends Model
{
    use HasFactory;

    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'software',
        'url',
        'token',
        'secret',
        'username',
        'password',
        'database',
        'synchronized_at',
    ];

    // Defina os tipos dos campos
    protected $casts = [
        'synchronized_at' => 'datetime',
    ];
}
