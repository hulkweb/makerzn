<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cryptocurrencies = [
            [
                'name' => 'Bitcoin',
                'symbol' => 'BTC',
                'icon_url' => 'path/to/bitcoin/icon', // optional, add the correct path if available
                'usd_value' => 62574.00
            ],
            [
                'name' => 'Ethereum',
                'symbol' => 'ETH',
                'icon_url' => 'path/to/ethereum/icon', // optional
                'usd_value' => 2528.85
            ],
            [
                'name' => 'Tether',
                'symbol' => 'USDT',
                'icon_url' => 'path/to/tether/icon', // optional
                'usd_value' => 1.002
            ],
            [
                'name' => 'BNB',
                'symbol' => 'BNB',
                'icon_url' => 'path/to/bnb/icon', // optional
                'usd_value' => 560.69
            ],
            [
                'name' => 'Solana',
                'symbol' => 'SOL',
                'icon_url' => 'path/to/solana/icon', // optional
                'usd_value' => 149.68
            ],
            [
                'name' => 'USD Coin',
                'symbol' => 'USDC',
                'icon_url' => 'path/to/usdc/icon', // optional
                'usd_value' => 1.002
            ],
            [
                'name' => 'XRP',
                'symbol' => 'XRP',
                'icon_url' => 'path/to/xrp/icon', // optional
                'usd_value' => 0.609
            ],
            [
                'name' => 'Lido Staked Ether',
                'symbol' => 'STETH',
                'icon_url' => 'path/to/steth/icon', // optional
                'usd_value' => 2525.16
            ],
            [
                'name' => 'Dogecoin',
                'symbol' => 'DOGE',
                'icon_url' => 'path/to/dogecoin/icon', // optional
                'usd_value' => 0.110
            ],
        ];

        DB::table('currencies')->insert($cryptocurrencies);
    }
}
