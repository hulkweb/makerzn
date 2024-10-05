<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            [
                'name' => 'Free Trial Project',
                'image' => '66b23fa2267251722957730.png',
                'price' => 50.00,
                'duration' => 1,
                'daily_rebate' => 1.00,
                'recoverable_funds' => 50.00,
                'recoverable_funds_two' => 1.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Starter Experience Project',
                'image' => '66b23fc0d77421722957760.png',
                'price' => 200.00,
                'duration' => 1,
                'daily_rebate' => 6.00,
                'recoverable_funds' => 200.00,
                'recoverable_funds_two' => 6.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer E9 Pro 3.68Gh/s',
                'image' => '66b23fe4802201722957796.png',
                'price' => 600.00,
                'duration' => 3,
                'daily_rebate' => 10.50,
                'recoverable_funds' => 600.00,
                'recoverable_funds_two' => 31.50,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer S21 200Th/s',
                'image' => '66b24006d58bc1722957830.png',
                'price' => 1200.00,
                'duration' => 5,
                'daily_rebate' => 22.80,
                'recoverable_funds' => 1200.00,
                'recoverable_funds_two' => 114.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer L7 9.16Gh/s',
                'image' => '66b24025902531722957861.png',
                'price' => 3600.00,
                'duration' => 6,
                'daily_rebate' => 75.60,
                'recoverable_funds' => 3600.00,
                'recoverable_funds_two' => 453.60,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer S21 Hyd 335Th/s',
                'image' => '66b240456d8811722957893.png',
                'price' => 8000.00,
                'duration' => 8,
                'daily_rebate' => 180.00,
                'recoverable_funds' => 8000.00,
                'recoverable_funds_two' => 1440.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer L9 16Gh/s',
                'image' => '66b2405c9a8571722957916.png',
                'price' => 16800.00,
                'duration' => 10,
                'daily_rebate' => 420.00,
                'recoverable_funds' => 16800.00,
                'recoverable_funds_two' => 4200.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer KS5 20Th/s',
                'image' => '66b24077a0add1722957943.png',
                'price' => 32000.00,
                'duration' => 12,
                'daily_rebate' => 896.00,
                'recoverable_funds' => 32000.00,
                'recoverable_funds_two' => 10752.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Antminer S21 XP Hyd 473Th/s',
                'image' => '66b2408f832571722957967.png',
                'price' => 60000.00,
                'duration' => 7,
                'daily_rebate' => 1980.00,
                'recoverable_funds' => 60000.00,
                'recoverable_funds_two' => 13860.00,
                'principal_refund' => true,
                'interest_settlement_time' => "24",
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
