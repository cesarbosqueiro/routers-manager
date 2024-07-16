<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radusers extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'connectionStartAt',
        'connectionEndAt',
        'macAddress',
        'ipAddress',
        'nasIpAddress',
        'nasPortId',
        'nasPortType',
        'serviceType',
        'framedProtocol',
        'framedIpAddress',
        'framedIpv6Prefix',
        'framedIpv6Pool',
        'framedIpv6Address',
        'framedIpv6Route',
        'framedIpv6PrefixLength',
        'framedIpv6InterfaceId',
        'framedIpv6LocalPool',
        'framedIpv6RemotePool',
        'framedIpv6PrefixPool',
        'framedIpv6PrefixRoute',
        'framedIpv6PrefixLengthPool',
        'framedIpv6PrefixInterfaceIdPool',
    ];

    protected $casts = [
        'connectionStartAt' => 'datetime',
        'connectionEndAt' => 'datetime',
    ];
}
