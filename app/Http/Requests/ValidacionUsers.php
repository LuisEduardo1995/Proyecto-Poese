<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsers extends FormRequest
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
                'email' => 'required|email|max:100|unique:usuario,email,'  . $this->route('id'),
                'usuario' => 'required|max:50|unique:usuario,usuario,' . $this->route('id'),
                'password' => 'required|min:5',
                're_password' => 'required|min:5|same:password'
        ];
    }
}
