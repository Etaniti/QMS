<?php

namespace App\Http\Requests\Specialists;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'organization_id' => ['required'],
            'specialist_name' => ['required', 'string', 'max:255'],
            'specialist_count' => ['required', 'regex: /^\d+(?:\.\d+$|(?: \d+(?:\/\d+)?)?)$/', 'max:25'],
            'specialist_tariff_category' => ['required', 'numeric', 'max:255'],
            'specialist_tariff_coefficient' => ['required', 'string', 'regex: /^\d+(?:\.\d+$|(?: \d+(?:\/\d+)?)?)$/', 'max:25'],
            'specialist_tariff_rate' => ['required', 'numeric'],
            'specialist_payrise_management_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'specialist_payrise_management_amount' => ['nullable', 'numeric'],
            'specialist_payrise_intensity_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'specialist_payrise_intensity_amount' => ['nullable', 'numeric'],
            'specialist_payrise_category_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'specialist_payrise_category_amount' => ['nullable', 'numeric'],
            'specialist_payrise_specificity_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'specialist_payrise_specificity_amount' => ['nullable', 'numeric'],
            'specialist_additional_stimulation_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'specialist_additional_stimulation_amount' => ['nullable', 'numeric']
        ];
    }
}
