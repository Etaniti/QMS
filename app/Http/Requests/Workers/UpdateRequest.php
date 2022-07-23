<?php

namespace App\Http\Requests\Workers;

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
            'organization_id' => ['required'],
            'worker_name' => ['required', 'string', 'max:255'],
            'worker_count' => ['required', 'regex: /^\d+(?:\.\d+$|(?: \d+(?:\/\d+)?)?)$/', 'max:25'],
            'worker_tariff_category' => ['required', 'numeric', 'max:255'],
            'worker_tariff_coefficient' => ['required', 'string', 'regex: /^\d+(?:\.\d+$|(?: \d+(?:\/\d+)?)?)$/', 'max:25'],
            'worker_tariff_rate' => ['required', 'numeric'],
            'worker_payrise_management_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'worker_payrise_management_amount' => ['nullable', 'numeric'],
            'worker_payrise_intensity_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'worker_payrise_intensity_amount' => ['nullable', 'numeric'],
            'worker_payrise_category_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'worker_payrise_category_amount' => ['nullable', 'numeric'],
            'worker_payrise_specificity_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'worker_payrise_specificity_amount' => ['nullable', 'numeric'],
            'worker_additional_stimulation_perc' => ['nullable', 'regex: /^(0*100{1,1}\.?((?<=\.)0*)?%?$)|(^0*\d{0,2}\.?((?<=\.)\d*)?%?)$/'],
            'worker_additional_stimulation_amount' => ['nullable', 'numeric']
        ];
    }
}
