<?php

namespace App\Rules;

use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidCode implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $code = Code::where('code', '=', $value)->first();
        return !is_null($code) && is_null($code->user_id) && Carbon::now()->between($code->start_date, $code->end_date);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute is not valid';
    }
}
