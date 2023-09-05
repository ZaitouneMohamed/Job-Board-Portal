<?php

namespace App\Http\Requests\fournisseur\company;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyRequest extends FormRequest
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
            "name" => "required|unique:companies,name|max:200",
            'description' => "required|max:255|min:10",
            'start_date' => "required|date",
            'location' => "required|max:200",
            'site_url' => "required|max:200|url|unique:companies,site_url",
            'phone_number' => "required|max:200",
        ];
    }
}
