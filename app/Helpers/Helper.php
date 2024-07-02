<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

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
        if (Auth::check()) {
            $user = Auth::user();
            return $user->user_type == 'A';
        } else {
            return false;
        }
    }
}
