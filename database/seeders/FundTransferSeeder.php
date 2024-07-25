<?php

namespace Database\Seeders;

use App\Models\FundTransfer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundTransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FundTransfer::updateOrCreate(
            [
                'user_id' => 3,
                'approver_id' => 1,
                'fund_type' => 'paid',
                'amount' => 5000,
                'bank_account_number' => "4478445",
                'bank_name' => "XYZ Bank",
                'IFSC' => "XYZ000001",
                'paid_on' => "2024-05-07",
                'status_id' => 1,
            ]
        );
        FundTransfer::updateOrCreate(
            [
                'user_id' => 2,
                'approver_id' => 3,
                'fund_type' => 'credit',
                'amount' => 1000,
                'status_id' => 1,
            ]
        );

        FundTransfer::updateOrCreate(
            [
                'user_id' => 2,
                'approver_id' => 3,
                'fund_type' => 'paid',
                'amount' => 500,
                'status_id' => 1,
                'paid_on' => "2024-07-24",
                'amt_paid_to' => "collected from shop"
            ]
        );
    }
}
