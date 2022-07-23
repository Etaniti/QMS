<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSpecialistMilitaryAccounting extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_specialist_id',
        'employee_military_card'
    ];

    public function employeeSpecialist()
    {
        return $this->belongsTo(EmployeeSpecialist::class);
    }
}
