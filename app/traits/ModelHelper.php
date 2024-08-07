<?php

namespace App\traits;

use App\Models\Service;

trait ModelHelper
{

    public function uniqid()
    {
        $id = $this->id;
        $postfixLength = strlen($id) + 2;
        $prefix = $this->getPrefix();
        if ($prefix) {
            return $prefix . str_pad($id, $postfixLength, '0', STR_PAD_LEFT);
        } else {
            $prefix = Service::find($this->service_id)->service_code ?? 'NA';
            return  $prefix . str_pad($id, $postfixLength, '0', STR_PAD_LEFT);
        }
    }

    public function getPrefix()
    {
        return match (get_class($this)) {
            'App\Models\DmtBeneficiary' => 'CUST',
            'App\Models\DmtCustomer' => 'BNFC',
            'App\Models\Ledger' => 'TRN',
            'App\Models\Service' => 'SERVE',
            'App\Models\FundTransfer' => 'FUND',
            default => null
        };
    }
}
