<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KartuNamaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"    => "string|min:3|max:40",
            "email"   => "unique:keanggotaans|max:40|min:5",
            "telepon" => "unique:keanggotaans|max:15|min:7",
            "alamat"  => "min:7",

        ];
    }
}
