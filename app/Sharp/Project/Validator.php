<?php

namespace App\Sharp\Project;

use Illuminate\Foundation\Http\FormRequest;

class Validator extends FormRequest
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
            'title.pt-br' => 'required',
            'title.en' => 'required',
            'link' => 'required'
        ];
    }
}
