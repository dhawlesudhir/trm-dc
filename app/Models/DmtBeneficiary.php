<?php

namespace App\Models;

use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DmtBeneficiary extends Model
{
    use HasFactory;
    use ModelHelper;

    public function DmtCustomer(): BelongsTo
    {
        return $this->belongsTo(DmtCustomer::class);
    }
}
