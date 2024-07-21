<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            "service_name" => 'recharge',
            "service_code" => 'RCH',
            "service_desc" => 'mobile/dth recharges',
            "service_type" => 'prepaid',
            "service_provider" => 'ambika',
            "operator_or_bank_name" => 'airtel',
            "operator_desc" => 'airtel mobile',
            "active" => 'true',
            "service_provider_code" => 'airtel',
            "commission" => '1',
            "com_type" => '%',
            "com_origin" => '1.5',
            "subscription_id" => null,
            "backup" => 0,
            "alternative" => 0,
            "handler" => 'AmbikaAPI',
        ]);

        Service::create([
            "service_name" => 'recharge',
            "service_code" => 'RCH',
            "service_desc" => 'mobile/dth recharges',
            "service_type" => 'dth',
            "service_provider" => 'ambika',
            "operator_or_bank_name" => 'airtel DTH',
            "operator_desc" => 'airtel tv recharge',
            "active" => 'true',
            "service_provider_code" => 'airtv',
            "commission" => '2',
            "com_type" => '%',
            "com_origin" => '2.5',
            "subscription_id" => null,
            "backup" => 0,
            "alternative" => 0,
            "handler" => 'AmbikaAPI',
        ]);

        Service::create([
            "service_name" => 'recharge',
            "service_code" => 'RCH',
            "service_desc" => 'mobile/dth recharges',
            "service_type" => 'prepaid',
            "service_provider" => 'ambika',
            "operator_or_bank_name" => 'jio',
            "operator_desc" => 'jio mobile recharge',
            "active" => 'true',
            "service_provider_code" => 'jio',
            "commission" => '.8',
            "com_type" => '%',
            "com_origin" => '1',
            "subscription_id" => null,
            "backup" => 0,
            "alternative" => 0,
            "handler" => 'AmbikaAPI',
        ]);
    }
}
