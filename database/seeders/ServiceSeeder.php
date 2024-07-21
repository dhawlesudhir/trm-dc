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
        Service::updateOrCreate([
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

        Service::updateOrCreate([
            "service_name" => 'recharge',
            "service_code" => 'PAY',
            "service_desc" => 'mobile/dth billPayment',
            "service_type" => 'postpaid',
            "service_provider" => 'ambika',
            "operator_or_bank_name" => 'airtel',
            "operator_desc" => 'airtel postpaid',
            "active" => 'true',
            "service_provider_code" => 'airtelb',
            "commission" => '0.5',
            "com_type" => '%',
            "com_origin" => '.8',
            "subscription_id" => null,
            "backup" => 0,
            "alternative" => 0,
            "handler" => 'AmbikaAPI',
        ]);

        Service::updateOrCreate([
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

        Service::updateOrCreate([
            "service_name" => 'dmt',
            "service_code" => 'DMT',
            "service_desc" => 'domestic money tranfer',
            "service_type" => 'IMPS',
            "service_provider" => 'Ibizz',
            "operator_or_bank_name" => 'NA',
            "operator_desc" => 'NA',
            "active" => 'true',
            "service_provider_code" => 'NA',
            "commission" => '-0.6',
            "com_type" => '%',
            "com_origin" => '-0.15',
            "subscription_id" => null,
            "backup" => 0,
            "alternative" => 0,
            "handler" => 'IBizzAPI',
        ]);
    }
}
