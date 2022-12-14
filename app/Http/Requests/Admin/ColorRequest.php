<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'color_name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'color_name.required' => 'Name field is required.',
        ];
    }
}
