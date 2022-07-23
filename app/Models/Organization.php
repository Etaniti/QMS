<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_name',
        'organization_adress_legal_index',
        'organization_adress_legal_city',
        'organization_adress_legal_street',
        'organization_adress_legal_house',
        'organization_adress_legal_corps',
        'organization_adress_legal_office',
        'organization_adress_post_index',
        'organization_adress_post_city',
        'organization_adress_post_street',
        'organization_adress_post_house',
        'organization_adress_post_corps',
        'organization_adress_post_office',
        'organization_phone',
        'organization_fax',
        'organization_email',
        'organization_website',
        'organization_directorate',
        'organization_debit_account',
        'organization_bic',
        'organization_unp',
        'organization_okpo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function staff()
    {
        return $this->hasOne(Staff::class);
    }

    public function structure()
    {
        return $this->hasOne(Structure::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($organization) {
            $organization->structure()->create([
                'organization_id' => $organization->id,
            ]);
        });

        static::created(function ($organization) {
            $organization->staff()->create([
                'organization_id' => $organization->id,
            ]);
        });
    }

    public function specialists()
    {
        return $this->hasMany(Specialist::class);
    }

    public function workers()
    {
        return $this->hasMany(Worker::class);
    }

    public function employeeSpecialists()
    {
        return $this->hasManyThrough(
            EmployeeSpecialist::class,
            Specialist::class,
            'emplyeeSpecialist_id',
            'specialist_id',
            'id',
            'id'
        );
    }

    public function employeeWorkers()
    {
        return $this->hasManyThrough(
            EmployeeWorker::class,
            Worker::class,
            'employeeWorker_id',
            'worker_id',
            'id',
            'id'
        );
    }

    public function authorize()
    {
        $organization = Organization::find($this->route('organization.edit'));

        return $organization && $this->user()->can('update-organization', $organization);
    }

    public function post()
    {
        $this->hasManyThrough(
            Post::class,
            Structure::class,
            'organization_id',
            'structure_id',
            'id',
            'id'
        );
    }

}
