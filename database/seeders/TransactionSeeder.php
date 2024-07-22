<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::updateorCreate(
            [
                "user_id" => 1,
                "service_id" => 1,
                "mobile_account" => "1234567890",
                "customer_name" => "XYZ ABCD",
                "amount" => 100,
                "commission" => 1,
                "sp_commission" => 1.5,
                "sp_bal" => 8590,
                "status_id" => 1,
                "own_ref_number" => rand(8975694, 878846879),
                "service_provider_ref_number" => rand(9632587, 147896325),
                "ip" => "127.0.0.1"
            ]
        );

        Transaction::updateorCreate(
            [
                "user_id" => 1,
                "service_id" => 4,
                "mobile_account" => "52052045897100",
                "customer_id" => 1,
                "beneficiary_id" => 1,
                "narration" => "for school",
                "mode" => "IMPS",
                "amount" => 3500,
                "customer_amount" => 3535,
                "commission" => -21.25,
                "sp_commission" => -5,
                "gst_amount" => 9,
                "sp_bal" => 2500000,
                "status_id" => 1,
                "own_ref_number" => rand(8975694, 878846879),
                "service_provider_ref_number" => rand(9632587, 147896325),
                "ip" => "127.0.0.1"
            ]
        );
    }
}
