<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AtLeastOneCheckbox implements Rule
{
    protected $attributes;

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function passes($attribute, $value)
    {
        foreach ($this->attributes as $attr) {
            if (request()->input($attr) == '1') {
                return true;
            }
        }
        return false;
    }

    public function message()
    {
        return 'チェックボックスを一つ以上選択してください。';
    }
}