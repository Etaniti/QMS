<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorker extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'employee_surname',
        'employee_name',
        'employee_patronymic',
        'employee_photo',
        'employee_birth_date',
        'employee_gender',
        'employee_institution',
        'employee_graduation_date',
        'employee_specialization',

        'employee_family_status',
        'employee_family_structure_name_1',
        'employee_family_structure_date_1',

        'employee_family_structure_name_2',
        'employee_family_structure_date_2',

        'employee_family_structure_name_3',
        'employee_family_structure_date_3',

        'employee_family_structure_name_4',
        'employee_family_structure_date_4',

        'employee_family_structure_name_5',
        'employee_family_structure_date_5',

        'employee_family_structure_name_6',
        'employee_family_structure_date_6',

        'employee_family_structure_name_7',
        'employee_family_structure_date_7',

        'employee_family_structure_name_8',
        'employee_family_structure_date_8',

        'employee_family_structure_name_9',
        'employee_family_structure_date_9',

        'employee_family_structure_name_10',
        'employee_family_structure_date_10',

        'employee_passport_series',
        'employee_passport_number',
        'employee_passport_issuance',
        'employee_passport_issuance_date',
        'employee_passport_issuance_term',
        'employee_living_place',
        'employee_residence_place',
        'employee_hiring_date'
    ];

    public function worker()
    {
        return $this->belongsTo(Worker::class, 'worker_id', 'id');
    }

    public function organization()
    {
        return $this->belongsToThrough(Organization::class, Worker::class);
    }

    public function employeeWorkerSecondments()
    {
        return $this->hasMany(EmployeeWorkerSecondment::class);
    }

    public function employeeWorkerPersonalCard()
    {
        return $this->hasOne(EmployeeWorkerPersonalCard::class);
    }

    public function employeeWorkerContract()
    {
        return $this->hasOne(EmployeeWorkerContract::class);
    }

    public function employeeWorkerInsurance()
    {
        return $this->hasOne(EmployeeWorkerInsurance::class);
    }

    public function employeeWorkerMilitaryAccounting()
    {
        return $this->hasOne(EmployeeWorkerMilitaryAccounting::class);
    }

    public function employeeWorkerLeaves()
    {
        return $this->hasMany(EmployeeWorkerLeave::class);
    }
}
