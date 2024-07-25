<?php

namespace App\Models;

use App\traits\ModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FundTransfer extends Model
{
    use HasFactory;
    use ModelHelper;

    protected $hidden = [
        'approval_id',
        'internal_description',
        'approved_by',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approval_id');
    }
}
