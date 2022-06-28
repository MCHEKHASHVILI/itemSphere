<?php

namespace App\Http\Requests\Charities;

use Illuminate\Foundation\Http\FormRequest;

class CharityUpdateRequest extends FormRequest
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
            'title' => "string",
            'description' => "string",
            'budget' => "numeric",
            'social_id' => "numeric",
            'status' => "string",
        ];
    }
}
