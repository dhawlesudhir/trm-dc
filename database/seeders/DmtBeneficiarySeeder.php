<?php

namespace Database\Seeders;

use App\Models\DmtBeneficiary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DmtBeneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DmtBeneficiary::updateOrCreate([
            'dmt_customer_id' => 1,
            'name' => 'sudhir dhawle',
            'mobile' => '8605689953',
            'bank_id' => 1,
            'account_number' => '5269748963',
            'ifsc' => 'ABCD0000145',
            'user_id' => 1,
            'amt' => 5000,
        ]);
    }
}
