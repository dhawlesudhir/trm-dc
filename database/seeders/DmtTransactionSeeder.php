<?php

namespace Database\Seeders;

use App\Models\DmtTransaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DmtTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DmtTransaction::created([
            'user_id' => 1,
            'own_ref_number' => rand(11589, 7895414),
            'service_id' => 1,
            'service_provider_ref_number' => rand(11589, 7895414),
            'customer_id' => 1,
            'beneficiary_id' => 1,
            'description' => "for mom",
            'mode' => "imps",
            'amount' => 5000,
            'customer_amount' => 50,
            'gst_amount' => 9,
            'commission' => -29,
            'sp_commission' => -14,
            'sp_bal' => 3000000,
            'internal_description' => 'NA',
            'status_id' => 1,
            'ip' => 1
        ]);
    }
}
