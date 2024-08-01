<?php

namespace Database\Seeders;

use App\Models\PromotionLeads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionLeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PromotionLeads::updateOrCreate(
            [
                'first_name' => 'lead 1',
                'middle_name' => 'A',
                'last_name' => 'B',
                'mobile' => '1234567891',
                'email' => 'lead1@gmail.com',
                'interest' => 'retailer',
                'status_id' => 17, // positive
                'homeShopNumberOrName' => 'xyz shop',
                'notes' => '{ "1":"customer will register later"}',
                'employee_id' => 1,
                'source' => 'field data'
            ]
        );

        PromotionLeads::updateOrCreate(
            [
                'first_name' => 'lead 2',
                'middle_name' => 'A',
                'last_name' => 'B',
                'mobile' => '1234567892',
                'email' => 'lead2@gmail.com',
                'interest' => 'distributor',
                'status_id' => 77, // registered
                'homeShopNumberOrName' => 'xyz shop',
                'notes' => '{ "17":"customer register by me"}',
                'employee_id' => 17,
                'source' => 'field data',
                'user_id' => 111
            ]
        );
    }
}
