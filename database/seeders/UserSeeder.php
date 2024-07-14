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
        $user = User::create([
            'first_name' => 'sudhir',
            'middle_name' => 'arun',
            'last_name' => 'dhawle',
            'mobile' => '8605689953',
            'email' => 'dhawlesudhir+trmadmin@gmail.com',
            'refer_by' => 'seeder',
            'service_type' => 1,
            'status' => 1,
            'password' => "Demo@12345",
            'login_id' => '1',
        ]);
    }
}
