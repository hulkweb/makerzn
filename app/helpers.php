<?php

use App\Models\Setting;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

if (!function_exists("priceHTML")) {
    function priceHTML($val)
    {

        if ($val == "") {
            $val = 0;
        }
        return "$" . number_format($val, 2, ".", ",");
    }
}

if (!function_exists("generateReferralCode")) {
    function generateReferralCode($id)
    {
        // Generate a random string
        $randomString = strtoupper(substr(md5(uniqid()), 0, 5));

        // Combine ID and random string to form the referral code
        $referralCode = "A" . $id . $randomString;

        return $referralCode;
    }
}

if (!function_exists("setting")) {
    function setting($key)
    {
        $setting = Setting::where("name", $key)->first();

        if ($setting) {
            if ($setting->type == "image") {
                return asset($setting->value);
            } else {
                return $setting->value;
            }
        }
        return "Not Found";
    }
}
if (!function_exists("getCryptoAmountForCurrency")) {
    function getCryptoAmountForCurrency($usdAmount, $cryptoId = 'BTC', $fiatCurrency = 'USD')
    {
        // Your CoinAPI key
        $apiKey = env("COIN_API_KEY");

        // Dynamically build the CoinAPI URL for the crypto to fiat exchange rate
        $url = 'https://rest.coinapi.io/v1/exchangerate/' . $cryptoId . '/' . $fiatCurrency;

        // Create a new Guzzle HTTP client
        $client = new Client();

        // Send GET request with the CoinAPI key in headers
        try {
            $response = $client->request('GET', $url, [
                'headers' => [
                    'X-CoinAPI-Key' => $apiKey
                ]
            ]);

            // Get the response body and decode the JSON
            $data = json_decode($response->getBody(), true);

            // Get the exchange rate (crypto to fiat)
            $exchangeRate = $data['rate'];
            DB::table('currencies')->where("symbol", $cryptoId)->update(['usd_value' => $exchangeRate, 'updated_at' => now()]);
            // Calculate how much of the crypto you can get for the given fiat amount
            $cryptoAmount = $usdAmount / $exchangeRate;

            // Return the result
            return $cryptoAmount;
        } catch (Exception $e) {
            // Handle exceptions, such as network issues or API errors
            return 'Error: ' . $e->getMessage();
        }
    }
}
