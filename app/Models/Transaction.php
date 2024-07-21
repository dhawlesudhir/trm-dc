<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected function TransactionNumber(): Attribute
    {
        //todo serviceName based prefix
        return Attribute::make(
            get: fn () => Service::find($this->service_id)->service_code . str_pad($this->id, strlen($this->id) + 2, '0', STR_PAD_LEFT),
        );
    }

    protected function CustomerName(): Attribute
    {
        //todo mask name logic
        return Attribute::make(
            get: fn ($value) => str_pad(substr($value, -6), strlen($value), 'X', STR_PAD_LEFT),
        );
    }
}
