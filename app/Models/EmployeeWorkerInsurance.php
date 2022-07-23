<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkerInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_worker_id',
        'employee_insurance_certificate'
    ];

    public function employeeWorker()
    {
        return $this->belongsTo(EmployeeWorker::class);
    }
}
