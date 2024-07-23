<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DmtCustomer extends Model
{
    use HasFactory;
    use ModelHelper;

    public function beneficiaries(): HasMany
    {
        return $this->hasMany(DmtBeneficiary::class);
    }
}
