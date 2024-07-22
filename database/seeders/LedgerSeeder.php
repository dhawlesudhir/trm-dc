<?php

namespace Database\Seeders;

use App\Models\Ledger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'transaction_on' => '2024-07-24 04:14:00',
            ]
        );
    }
}
