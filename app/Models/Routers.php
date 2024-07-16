<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ipv4',
        'ipv6',
        'username',
        'password',
        'secret_radius',
        'port',
        'type',
        'vendor',
        'model',
        'firmware',
        'software',
    ];

    protected $casts = [
        'ipv4' => 'ipAddress',
        'ipv6' => 'ipAddress',
    ];
}
