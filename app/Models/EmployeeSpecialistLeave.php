<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSpecialistLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_specialist_id',
        'employee_leave_start',
        'employee_leave_end',
        'employee_leave_request'
    ];

    public function employeeSpecialist()
    {
        return $this->belongsTo(EmployeeSpecialist::class);
    }
}
