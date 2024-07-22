<?php

namespace App\Models;

use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use ModelHelper;

    protected function CustomerName(): Attribute
    {
        //todo mask name logic
        return Attribute::make(
            get: fn ($value) => str_pad(substr($value, -6), strlen($value), 'X', STR_PAD_LEFT),
        );
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
