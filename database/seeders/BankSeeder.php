<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bank::updateOrCreate(
            [
                'bank_name' => 'ICICI BANK',
                'bank_name_short' => 'ICICI',
                'bank_code' => 'ICICI',
                'IFSC' => 'ICIC0000001',
                'IMPS' => 1,
                'NEFT' => 1,
                'RTGS' => 1,
                'active' => 1,
                'service_id' => 4,
            ]
        );

        Bank::updateOrCreate(
            [
                'bank_name' => 'SBI BANK',
                'bank_name_short' => 'SBI',
                'bank_code' => 'SBIB',
                'IFSC' => 'SBIB0000001',
                'IMPS' => 1,
                'NEFT' => 1,
                'RTGS' => 1,
                'active' => 1,
                'service_id' => 4,
            ]
        );


        Bank::updateOrCreate(
            [
                'bank_name' => 'YES BANK',
                'bank_name_short' => 'YESBANK',
                'bank_code' => 'YESB',
                'IFSC' => 'YESB0000001',
                'IMPS' => 1,
                'NEFT' => 1,
                'RTGS' => 1,
                'active' => 1,
                'service_id' => 4,
            ]
        );

        Bank::updateOrCreate(
            [
                'bank_name' => 'KOTAK BANK',
                'bank_name_short' => 'KOTAKB',
                'bank_code' => 'KOTAK',
                'IFSC' => 'KBK0000001',
                'IMPS' => 1,
                'NEFT' => 1,
                'RTGS' => 1,
                'active' => 1,
                'service_id' => 4,
            ]
        );

        Bank::updateOrCreate(
            [
                'bank_name' => 'HDFC BANK',
                'bank_name_short' => 'HDFC',
                'bank_code' => 'HDFC',
                'IFSC' => 'HDFC0000001',
                'IMPS' => 1,
                'NEFT' => 1,
                'RTGS' => 1,
                'active' => 1,
                'service_id' => 4,
            ]
        );
    }
}
