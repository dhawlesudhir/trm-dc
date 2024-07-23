<?php

namespace App\Models;

use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    use ModelHelper;


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

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function dmt_transactions()
    {
        return $this->hasMany(DmtTransaction::class);
    }
}
