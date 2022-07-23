<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSpecialistSecondment extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_secondment_term_start',
        'employee_secondment_term_end',
        'employee_secondment_order',
        'employee_specialist_id'
    ];

    public function employeeSpecialist()
    {
        return $this->belongsTo(EmployeeSpecialist::class);
    }
}
