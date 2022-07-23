<?php

namespace App\Http\Requests\Organizations;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'organization_name' => ['required', 'string', 'unique:organizations', 'max:255'],
            'organization_adress_legal_index' => ['required', 'digits:6'],
            'organization_adress_legal_city' => ['required', 'string', 'regex:/^[а-яА-Я][а-яА-Я ]*$/', 'max:255'],
            'organization_adress_legal_street' => ['required', 'string', 'max:255'],
            'organization_adress_legal_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'organization_adress_legal_corps' => ['nullable', 'numeric'],
            'organization_adress_legal_office' => ['nullable', 'string', 'max:255'],
            'organization_adress_post_index' => ['required', 'digits:6'],
            'organization_adress_post_city' => ['required', 'string', 'regex:/^[а-яА-Я][а-яА-Я ]*$/', 'max:255'],
            'organization_adress_post_street' => ['required', 'string', 'max:255'],
            'organization_adress_post_house' => ['required', 'string', 'regex:/^[1-9]\d*(?:[ -]?(?:[а-яА-Я]+|[1-9]\d*))?$/'],
            'organization_adress_post_corps' => ['nullable', 'numeric'],
            'organization_adress_post_office' => ['nullable', 'string', 'max:255'],
            'organization_phone' => ['required', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_fax' => ['nullable', 'string', 'unique:organizations', 'regex:/^([0-9\s\+\(\)]*)$/', 'size:13'],
            'organization_email' => ['required', 'string', 'email', 'unique:organizations', 'max:255'],
            'organization_website' => ['nullable', 'string', 'url', 'unique:organizations', 'max:255'],
            'organization_directorate' => ['required', 'string', 'max:255'],
            'organization_debit_account' => ['required', 'string', 'unique:organizations', 'regex:/^[A-Z0-9 ]+$/', 'size:28'],
            'organization_bic' => ['required', 'string', 'regex:/^[A-Z0-9 ]+$/', 'size:8'],
            'organization_unp' => ['required', 'unique:organizations', 'digits:9'],
            'organization_okpo' => ['nullable', 'unique:organizations', 'digits:8'],
        ];
    }
}
