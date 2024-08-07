<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            SubscriptionSeeder::class,
            ServiceSeeder::class,
            BankSeeder::class,
            AddressSeeder::class,
            DmtCustomerSeeder::class,
            DmtBeneficiarySeeder::class,
            TransactionSeeder::class,
            LedgerSeeder::class,
            FundTransferSeeder::class,
            PromotionLeadsSeeder::class
        ]);
    }
}
