<?php

namespace App\Helpers;

class Helper
{
    public static function password_generate(): string
    {
        // Define a string containing all possible characters for the password
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
        // Shuffle the characters in the string and extract a substring of length $chars
        return substr(str_shuffle($data), 0, 8);
    }
}
