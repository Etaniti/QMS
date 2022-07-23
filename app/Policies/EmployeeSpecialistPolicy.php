<?php

namespace App\Policies;

use App\Models\EmployeeSpecialist;
use App\Models\Specialist;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmployeeSpecialistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EmployeeSpecialist  $employeeSpecialist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, EmployeeSpecialist $employeeSpecialist)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user, Specialist $specialist)
    {
        return $user->id === $specialist->organization->user_id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EmployeeSpecialist  $employeeSpecialist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, EmployeeSpecialist $employeeSpecialist)
    {
        return $user->id === $employeeSpecialist->specialist->organization->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EmployeeSpecialist  $employeeSpecialist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, EmployeeSpecialist $employeeSpecialist)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EmployeeSpecialist  $employeeSpecialist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, EmployeeSpecialist $employeeSpecialist)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\EmployeeSpecialist  $employeeSpecialist
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, EmployeeSpecialist $employeeSpecialist)
    {
        //
    }
}
