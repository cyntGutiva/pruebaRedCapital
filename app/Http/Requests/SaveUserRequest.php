<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
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
        date_default_timezone_set('America/Santiago');
        return [
            'username' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'required',
            'password' => ['required', 'min:6'],
        ];

        /*request()-> validate([
            'username' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email'],
            'phone' => 'required',
            'password' => ['required', 'min:6'],
        ], [
            'username.required' => 'Necesitas el nombre de usuario'
        ]);*/
    }

    public function messages(){
        return [
            'username.required' => 'Necesitas el nombre de usuario'
        ];
    }
}
