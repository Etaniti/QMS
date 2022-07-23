<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSpecialistInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_specialist_id',
        'employee_insurance_certificate'
    ];

    public function employeeSpecialist()
    {
        return $this->belongsTo(EmployeeSpecialist::class);
    }
}
