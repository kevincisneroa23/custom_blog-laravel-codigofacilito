<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'name' => 'min:4 | max:120 |  required',
            'email' => 'min:4 | max:100 | email | required | unique:users,email',
            'password' => 'min:4 | max:250 | required',
            'img_perfil' => 'image ',
        ];
    }
}
