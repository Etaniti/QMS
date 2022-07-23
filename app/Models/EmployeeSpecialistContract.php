<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSpecialistContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_specialist_id',
        'employment_contract_type',
        'employment_contract_term_start',
        'employment_contract_term_end',
        'employment_contract'
    ];

    public function employeeSpecialist()
    {
        return $this->belongsTo(EmployeeSpecialist::class);
    }
}
