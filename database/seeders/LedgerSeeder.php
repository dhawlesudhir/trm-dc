<?php

namespace Database\Seeders;

use App\Models\Ledger;
use Illuminate\Database\Seeder;

class LedgerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ledger::updateOrCreate(
            [
                'user_id' => 1,
                'transaction_id' => 1,
                'service_id' => 1,
                'amount' => 100,
                'balance' => 900,
                'commission' => 1,
                'description' => "recharge 1234567890",
                'type' => 'debit',
                'transaction_on' => date('Y-m-d h:i:s'),
            ]
        );

        Ledger::updateOrCreate(
            [
                'user_id' => 2,
                'transaction_id' => 2,
                'service_id' => 5,
                'amount' => 1000,
                'balance' => 1900,
                'commission' => 0,
                'description' => "fund received 234567890",
                'type' => 'credit',
                'transaction_on' => date('Y-m-d h:i:s'),
            ]
        );
    }
}
