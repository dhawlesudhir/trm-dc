<?php

namespace App\Models;

use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmtTransaction extends Model
{
    use HasFactory;
    use ModelHelper;

    // protected function TransactionNumber(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn () => Service::find($this->service_id)->service_code . str_pad($this->id, strlen($this->id) + 2, '0', STR_PAD_LEFT),
    //     );
    // }
}
