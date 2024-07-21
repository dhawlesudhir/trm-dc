<?php

namespace Database\Seeders;

use App\Models\DmtCustomer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DmtCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DmtCustomer::updateOrCreate([
            'first_name' => 'sudhir',
            'middle_name' => 'arun',
            'last_name' => 'dhawle',
            'mobile' => '8605689953',
            'address' => 'Hinjewadi,pune-57,maharashtra',
            'kyc_id' => 0,
            'user_id' => 1,
        ]);
    }
}
