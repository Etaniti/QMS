<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkerSecondment extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_secondment_term_start',
        'employee_secondment_term_end',
        'employee_secondment_order',
        'employee_worker_id'
    ];

    public function employeeWorker()
    {
        return $this->belongsTo(EmployeeWorker::class);
    }
}
