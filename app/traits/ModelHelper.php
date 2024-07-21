<?php

namespace App\traits;

use App\Models\Service;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait ModelHelper
{

    public function TransactionNumber(String $prefix = null)
    {
        $id = $this->id;
        $postfixLength = strlen($id) + 2;
        if ($prefix) {
            return $prefix . str_pad($id, $postfixLength, '0', STR_PAD_LEFT);
        } else {
            $prefix = Service::find($this->service_id)->service_code ?? 'NA';
            return  $prefix . str_pad($id, $postfixLength, '0', STR_PAD_LEFT);
        }

        // return Attribute::make(
        //     get: function () use ($prefix) {
        //         if ($prefix != '') {
        //             return $prefix . str_pad($this->id, 4, '0', STR_PAD_LEFT);
        //         } else {
        //             $prefix = Service::find($this->service_id)->service_code ?? 'NA';
        //             return  $prefix . str_pad($this->id, strlen($this->id) + 2, '0', STR_PAD_LEFT);
        //         }
        //     }
        // );
    }
}
