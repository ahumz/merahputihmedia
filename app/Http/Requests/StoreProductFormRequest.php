<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductFormRequest extends FormRequest
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
            'nama' => 'required|max:20',
            'username' => 'required|max:20|regex:/^(?=.*?[a-zA-Z])(?=.*?[0-9]).{6,}$/',
            'password' => 'required|string|min:30|regex:/^(?=.*?[a-zA-Z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'tgl_lahir' => 'required',
            'alamat' => '',
            'kecamatan' => 'required',
            'telpon' => 'required|max:14',
            'email' => 'required|max:100',
            'foto' => 'mimes:jpeg|file|dimensions:max_width=1920,max_height=720|max:2000',  
        ];
    }
}
