<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'first_name' => 'sudhir',
                'middle_name' => 'arun',
                'last_name' => 'dhawle',
                'mobile' => '8605689953',
                'email' => 'dhawlesudhir+trmadmin@gmail.com',
                'refer_by' => 'seeder',
                'service_type' => User::$ADMIN,
                'status' => 1,
                'password' => "Demo@12345",
                'login_id' => '1',
            ]

        );

        $user = User::create(

            [
                'first_name' => 'Sanjay',
                'middle_name' => 'A',
                'last_name' => 'Kate',
                'mobile' => '8605680000',
                'email' => 'dhawlesudhir+demo@gmail.com',
                'refer_by' => 'seeder',
                'service_type' => User::$RETAILER,
                'status' => 1,
                'password' => "Demo@12345",
                'login_id' => '2',
            ]

        );

        $user = User::create(
            [
                'first_name' => 'Vijay',
                'middle_name' => 'S',
                'last_name' => 'Gore',
                'mobile' => '8605680001',
                'email' => 'dhawlesudhir+demo2@gmail.com',
                'refer_by' => 'seeder',
                'service_type' => User::$DISTRIBUTOR,
                'status' => 1,
                'password' => "Demo@12345",
                'login_id' => '3',
            ]
        );
    }
}
