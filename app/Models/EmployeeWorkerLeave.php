<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkerLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_worker_id',
        'employee_leave_start',
        'employee_leave_end',
        'employee_leave_request'
    ];

    public function employeeWorker()
    {
        return $this->belongsTo(EmployeeWorker::class);
    }
}
