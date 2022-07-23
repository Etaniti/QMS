<?php

namespace App\Http\Requests\EmployeeSpecialists\Secondments;

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
            'employee_specialist_id' => 'required',
            'employee_secondment_term_start' => ['required', 'date'],
            'employee_secondment_term_end' => ['required', 'date'],
            'employee_secondment_order' => ['required', 'mimes:pdf,docx,doc','max:2048'],
        ];
    }
}
