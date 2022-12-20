<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Translation\PotentiallyTranslatedString;

class SpanishPhoneNumber implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  Closure(string): PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail): void
    {
        $str = preg_replace('/\s/g', '', $value);

        if (strlen($str) !== 9 || !preg_match('/^[679]{1}[0-9]{8}$/', $str)) {
            $fail('This :attribute is not valid');
        }
    }
}
