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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"    => "required|string|min:3|max:40",
            "email"   => "required|unique:keanggotaans|max:40|min:5",
            "telepon" => "required|unique:keanggotaans|max:15|min:7",
            "alamat"  => "required|min:7",
        ];
    }

    public function messages()
    {
        return [
            'name.required'    => "Nama nilainya masih kosong",
            'email.required'   => "E-mail nilainya masih kosong",
            'telepon.required' => "Telepon nilainya masih kosong",
            'alamat.required'  => "Alamat nilainya masih kosong",
            'name.string'      => "Inputan Nama tidak boleh bernilai angka",
            'name.min'         => "Inputan Nama harus minimal 3(tiga) digit",
            'email.min'        => "Inputan E-Mail harus minimal 5(lima) digit",
            'telepon.min'      => "Inputan Telepon harus minimal 7(tujuh) digit",
            'alamat.min'       => "Inputan Alamat harus minimal 7(tujuh) digit",
            'email.unique'     => "E-Mail Sudah terdaftar",
            'telepon.unique'   => "Telepon Sudah terdaftar",
        ];
    }
}
