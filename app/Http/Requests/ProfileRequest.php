<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'contact_phone' => ['nullable', 'unique:profiles', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'chapter' => ['required', 'mimes: pdf,doc,docx'],
            'incorporator_surname' => ['nullable', 'string', 'max:255'],
            'incorporator_name' => ['nullable', 'string', 'max:255'],
            'incorporator_patronymic' => ['nullable', 'string', 'max:255'],
            'attorney' => ['nullable', 'mimes: pdf,doc,docx']
        ];
    }
}
