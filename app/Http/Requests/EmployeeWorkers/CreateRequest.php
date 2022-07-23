<?php

namespace App\Http\Requests\EmployeeWorkers;

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
            'worker_id' => ['required'],
            'employee_surname' => ['required', 'string', 'max:255'],
            'employee_name' => ['required', 'string', 'max:255'],
            'employee_patronymic' => ['required', 'string', 'max:255'],
            'employee_photo' => ['nullable', 'image'],
            'employee_birth_date' => ['required', 'date'],
            'employee_gender' => ['required', 'string'],
            'employee_institution' => ['nullable', 'string', 'max:255'],
            'employee_graduation_date' => ['nullable', 'date'],
            'employee_specialization' => ['nullable', 'string', 'max:255'],

            'employee_family_status' => ['required', 'string'],
            'employee_family_structure_name_1' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_1' => ['nullable', 'date'],

            'employee_family_structure_name_2' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_2' => ['nullable', 'date'],

            'employee_family_structure_name_3' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_3' => ['nullable', 'date'],

            'employee_family_structure_name_4' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_4' => ['nullable', 'date'],

            'employee_family_structure_name_5' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_5' => ['nullable', 'date'],

            'employee_family_structure_name_6' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_6' => ['nullable', 'date'],

            'employee_family_structure_name_7' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_7' => ['nullable', 'date'],

            'employee_family_structure_name_8' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_8' => ['nullable', 'date'],

            'employee_family_structure_name_9' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_9' => ['nullable', 'date'],

            'employee_family_structure_name_10' => ['nullable', 'string', 'max:255'],
            'employee_family_structure_date_10' => ['nullable', 'date'],

            'employee_passport_series' => ['required', 'regex:/[A-ZА-Я]/', 'size:2'],
            'employee_passport_number' => ['required', 'digits:7'],
            'employee_passport_issuance' => ['required', 'string', 'max:255'],
            'employee_passport_issuance_date' => ['required', 'date'],
            'employee_passport_issuance_term' => ['required', 'date'],
            'employee_living_place' => ['required', 'string', 'max:255'],
            'employee_residence_place' => ['required', 'string', 'max:255'],
            'employee_hiring_date' => ['required', 'date'],
        ];
    }
}
