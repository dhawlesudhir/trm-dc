<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $hidden = [
        'com_origin',
        'backup',
        'alternative',
        'handler',
        'subscription_id',
        'service_provider_code',
        'active',
        'service_provider',
        'service_code',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}