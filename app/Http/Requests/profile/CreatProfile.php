<?php

namespace App\Http\Requests\profile;

use Illuminate\Foundation\Http\FormRequest;

class CreatProfile extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "first_name" => "required|max:200",
            "last_name" => "required|max:200",
            "phone" => "required|max:200",
            "gender" => "required",
            "description" => "required|max:255"
        ];
    }
}
