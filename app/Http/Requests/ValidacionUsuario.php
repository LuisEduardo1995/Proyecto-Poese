<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
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
        if ($this->route('id')) {
            return [
                'cedula' => 'required|max:50',
                'nombre' => 'required|max:50',
                'apellido' => 'required|max:50',
                'telefono' => 'required|max:50,',
                'email' => 'required|email|max:100|unique:usuario,email,' . $this->route('id'),
                'usuario' => 'required|max:50|unique:usuario,usuario,' . $this->route('id'),
                'password' => 'nullable|min:5',
                're_password' => 'nullable|required_with:password|min:5|same:password',
                'rol_id' => 'required|array'
            ];
        } else {
            return [
                'cedula' => 'required|max:50',
                'nombre' => 'required|max:50',
                'apellido' => 'required|max:50',
                'telefono' => 'required|max:50',
                'email' => 'required|email|max:100|unique:usuario,email,'  . $this->route('id'),
                'usuario' => 'required|max:50|unique:usuario,usuario,' . $this->route('id'),
                'password' => 'required|min:5',
                're_password' => 'required|min:5|same:password',
                'rol_id' => 'required|array'
            ];
        }
    }
}
