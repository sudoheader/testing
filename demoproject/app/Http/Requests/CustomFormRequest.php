<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomFormRequest extends FormRequest
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
            "username" => "required",
            "password" => "required",
        ];
    }

    public function messages() {
        return [
            "username.required" => "how are we supposed to log you in?",
            "password.required" => "how are we supposed to log you in?",
        ];
    }
}
