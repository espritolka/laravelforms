<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'name' => 'required|max:100',
            'surname' => 'required|max:100',
            'patronymic' => 'required|max:100',
            'snils' => 'required|regex:/^\d{3}\-\d{3}\-\d{3}\s\d{2}$/',
            'login' => 'required|min:5',
            'password' => 'required|min:8',
        ];
    }
}
