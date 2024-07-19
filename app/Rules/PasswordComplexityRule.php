<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordComplexityRule implements Rule
{
    public function passes($attribute, $value)
    {
     
        $sequences = [
            'qwerty',
            'password123',
            'abc123',      
        ];

        if (strlen($value) < 12) {
            return false;
        }

        
        if (!preg_match('/[0-9]/', $value)) {
            return false;
        }

       
        if (!preg_match('/[A-Z]/', $value)) {
            return false;
        }

        if (!preg_match('/[a-z]/', $value)) {
            return false;
        }

        if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $value)) {
            return false;
        }
        
    foreach ($sequences as $sequence) {
        if (stripos($value, $sequence) !== false) {
            return false;
            }
        }


        return true;
    }

    public function message()
    {
        return __('The password must be at least: 12 characters, one number, one special character, one uppercase and lowercase letter. Avoid some commom patterns');
    }
}