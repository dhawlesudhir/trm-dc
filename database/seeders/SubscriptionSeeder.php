<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscription = Subscription::create(
            [
                'plan_name' => 'Level 1',
                'service_name' => 'RECHARGE',
                'operator_or_bank' => 'AIRTEL',
                'commission' => '1',
                'com_type' => '%',
            ]
        );

        $subscription = Subscription::create(
            [
                'plan_name' => 'Level 2',
                'service_name' => 'RECHARGE',
                'operator_or_bank' => 'AIRTEL',
                'commission' => '1.5',
                'com_type' => '%',
            ]
        );

        $subscription = Subscription::create(
            [
                'plan_name' => 'Level 3',
                'service_name' => 'RECHARGE',
                'operator_or_bank' => 'AIRTEL',
                'commission' => '1.8',
                'com_type' => '%',
            ]
        );
    }
}
