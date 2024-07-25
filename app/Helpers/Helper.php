<?php

namespace App\Helpers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Helper
{
    public static function password_generate(): string
    {
        // Define a string containing all possible characters for the password
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        // Shuffle the characters in the string and extract a substring of length $chars
        return substr(str_shuffle($data), 0, 8);
    }

    public static function user_is_admin(): bool
    {
        if ($user = Auth::user()) {
            return $user->service_type == User::$ADMIN;
        } else {
            return false;
        }
    }

    public static function serviceTypeName($service_type)
    {
        return match ($service_type) {
            User::$ADMIN_TYPE => User::$ADMIN,
            User::$RETAILER_TYPE => User::$RETAILER,
            User::$DISTRIBUTOR_TYPE => User::$DISTRIBUTOR,
        };
    }
}
