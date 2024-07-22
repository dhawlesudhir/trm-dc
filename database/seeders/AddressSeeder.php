<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::updateOrCreate(
            [
                'user_id' => 1,
                "homeShopNumberOrName" => '804,A15',
                "building_name" => 'sparklet',
                "area_name" => 'hinjewadi phase 3',
                "landmark" => 'megapolis',
                "city_village" => 'pune',
                "state" => 'maharashtra ',
                "postalCode" => '411057',
                "addressType" => 'home',
                "active" => 1,
                "verified" => 1,
                "verified_by" => "AD001",
                "description" => 'test',
                "coordinates" => "18.579189858439996, 73.68237670090726",
            ]
        );
    }
}
