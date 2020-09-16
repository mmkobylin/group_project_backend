<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class RoundRequest extends FormRequest
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
            "round" => ["required", "integer"], 
            "image_data" => ["nullable", "string"],
            "guess" => ["nullable", "string"],
        ];
    }
}
