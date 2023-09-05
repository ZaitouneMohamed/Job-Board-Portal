<?php

namespace App\Http\Requests\fournisseur\Annonce;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnnonceRequest extends FormRequest
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
            "title" => "required|max:200",
            "salary" => "required|max:200",
            "companie_id" => "required",
            "categorie_id" => "required",
            "description" => "required|min:10",
            "requirement" => "required|min:10",
            "location" => "required|max:110",
        ];
    }
}
