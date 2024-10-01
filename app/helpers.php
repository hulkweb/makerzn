<?php

if (!function_exists("priceHTML")) {
    function priceHTML($val)
    {
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
