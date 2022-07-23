<?php

namespace App\Providers;

use App\Policies\ProfilePolicy;
use App\Policies\OrganizationPolicy;
use App\Policies\SpecialistPolicy;
use App\Policies\EmployeeSpecialistPolicy;
use App\Policies\WorkerPolicy;
use App\Policies\EmployeeWorkerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Profile;
use App\Models\Organization;
use App\Models\Specialist;
use App\Models\Worker;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Profile::class => ProfilePolicy::class,
        Organization::class => OrganizationPolicy::class,
        Specialist::class => SpecialistPolicy::class,
        Worker::class => WorkerPolicy::class,
        EmployeeSpecialist::class => EmployeeSpecialistPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-organization', [OrganizationPolicy::class, 'update']);
        Gate::define('create-specialist', [SpecialistPolicy::class, 'create']);
        Gate::define('update-specialist', [SpecialistPolicy::class, 'update']);
        Gate::define('create-worker', [WorkerPolicy::class, 'create']);
        Gate::define('update-worker', [WorkerPolicy::class, 'update']);
        Gate::define('create-employeeSpecialist', [EmployeeSpecialistPolicy::class, 'create']);
        Gate::define('update-employeeSpecialist', [EmployeeSpecialistPolicy::class, 'update']);
        Gate::define('create-employeeWorker', [EmployeeWorkerPolicy::class, 'create']);
        Gate::define('update-employeeWorker', [EmployeeWorkerPolicy::class, 'update']);
    }
}
