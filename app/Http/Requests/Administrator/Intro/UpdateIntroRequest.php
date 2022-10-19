<?php

namespace App\Http\Requests\Administrator\Intro;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIntroRequest extends FormRequest
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
            'image' => ['image', 'mimes:png,jpg,jpeg'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:1000'],
            'meetting' => ['required', 'string', 'max:100']
        ];
    }
}