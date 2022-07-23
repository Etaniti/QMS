<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\OrganizationsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffBookController;
use App\Http\Controllers\SpecialistsController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\EmployeeSpecialistsController;
use App\Http\Controllers\EmployeeWorkersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

//Profile
Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.index');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

//Organizations
Route::get('/organizations/create', [OrganizationsController::class, 'create']);
Route::post('/organizations', [OrganizationsController::class, 'store']);
Route::get('/organizations/{organization}', [OrganizationsController::class, 'show']);
Route::get('/organizations/{organization}/edit', [OrganizationsController::class, 'edit'])->name('organization.edit');
Route::patch('/organizations/{organization}', [OrganizationsController::class, 'update'])->name('organization.update');

//Staff
Route::get('/organizations/{organization}/staff', [StaffController::class, 'index'])->name('staff.index');
//Function
Route::get('/organizations/{organization}/staff', [StaffController::class, 'staffCounting' ]);

//StaffBook
Route::get('/staff/{staff}/book', [StaffBookController::class, 'index'])->name('staffbook.index');

//Structure
Route::get('/organizations/{organization}/structure', [ModulesController::class, 'index']);
Route::post('/organizations/structure', [ModulesController::class, 'store']);

//Specialists
Route::get('/staff/specialists/{specialist}', [SpecialistsController::class, 'index']);
Route::post('/staff/specialists', [SpecialistsController::class, 'store']);
Route::get('/staff/{organization}/specialists/create', [SpecialistsController::class, 'create']);
Route::get('/staff/specialists/{specialist}/edit', [SpecialistsController::class, 'edit']);
Route::patch('/staff/specialists/{specialist}', [SpecialistsController::class, 'update']);
Route::get('/staff/specialists/{specialist}/delete', [SpecialistsController::class, 'delete']);
Route::post('/staff/specialists/{specialist}/delete', [SpecialistsController::class, 'destroy']);

//Workers
Route::get('/staff/workers/{worker}', [WorkersController::class, 'index']);
Route::post('/staff/workers', [WorkersController::class, 'store']);
Route::get('/staff/{organization}/workers/create', [WorkersController::class, 'create']);
Route::get('/staff/workers/{worker}/edit', [WorkersController::class, 'edit']);
Route::patch('/staff/workers/{worker}', [WorkersController::class, 'update']);
Route::get('/staff/workers/{worker}/delete', [WorkersController::class, 'delete']);
Route::post('/staff/workers/{worker}/delete', [WorkersController::class, 'destroy']);

//EmployeeSpecialists
Route::get('/specialists/{specialist}/employees/create', [EmployeeSpecialistsController::class, 'create']);
Route::post('/specialists/{specialist}/employees', [EmployeeSpecialistsController::class, 'store']);
Route::get('/specialists/{specialist}/employees/{employee}', [EmployeeSpecialistsController::class, 'show']);
Route::get('/specialists/employees/{employee}/edit', [EmployeeSpecialistsController::class, 'edit']);
Route::patch('/specialists/employees/{employee}', [EmployeeSpecialistsController::class, 'update']);
Route::get('/specialists/employees/{employee}/delete', [EmployeeSpecialistsController::class, 'delete']);
Route::post('/specialists/employees/{employee}/delete', [EmployeeSpecialistsController::class, 'destroy']);
//PersonalCards
Route::post('/specialists/employees/{employee}/personal-card', [App\Http\Livewire\EmployeeSpecialists\PersonalCards::class, 'store']);
Route::patch('/specialists/employees/personal-card/{personal_card}', [App\Http\Livewire\EmployeeSpecialists\PersonalCards::class, 'update']);
//Contracts
Route::post('/specialists/employees/{employee}/contract', [App\Http\Livewire\EmployeeSpecialists\Contracts::class, 'store']);
Route::patch('/specialists/employees/contract/{contract}', [App\Http\Livewire\EmployeeSpecialists\Contracts::class, 'update']);
//Insurances
Route::post('/specialists/employees/{employee}/insurance', [App\Http\Livewire\EmployeeSpecialists\Insurances::class, 'store']);
Route::patch('/specialists/employees/insurance/{insurance}', [App\Http\Livewire\EmployeeSpecialists\Insurances::class, 'update']);
//Secondments
Route::post('/specialists/employees/{employee}/secondments', [App\Http\Livewire\EmployeeSpecialists\Secondments::class, 'store']);
Route::get('/specialists/employees/secondments/{secondment}/delete', [App\Http\Livewire\EmployeeSpecialists\Secondments::class, 'delete']);
Route::post('/specialists/employees/secondments/{secondment}/delete', [App\Http\Livewire\EmployeeSpecialists\Secondments::class, 'destroy']);
//Leaves
Route::post('/specialists/employees/{employee}/leaves', [App\Http\Livewire\EmployeeSpecialists\Leaves::class, 'store']);
Route::get('/specialists/employees/leaves/{leave}/delete', [App\Http\Livewire\EmployeeSpecialists\Leaves::class, 'delete']);
Route::post('/specialists/employees/leaves/{leave}/delete', [App\Http\Livewire\EmployeeSpecialists\Leaves::class, 'destroy']);
//MilitaryAccountings
Route::post('/specialists/employees/{employee}/military-accounting', [App\Http\Livewire\EmployeeSpecialists\MilitaryAccountings::class, 'store']);
Route::patch('/specialists/employees/military-accounting/{military_accounting}', [App\Http\Livewire\EmployeeSpecialists\MilitaryAccountings::class, 'update']);

//EmployeeWorkers
Route::get('/workers/{worker}/employees/create', [EmployeeWorkersController::class, 'create']);
Route::post('/workers/{worker}/employees', [EmployeeWorkersController::class, 'store']);
Route::get('/workers/{worker}/employees/{employee}', [EmployeeWorkersController::class, 'show']);
Route::get('/workers/employees/{employee}/edit', [EmployeeWorkersController::class, 'edit']);
Route::patch('/workers/employees/{employee}', [EmployeeWorkersController::class, 'update']);
Route::get('/workers/employees/{employee}/delete', [EmployeeWorkersController::class, 'delete']);
Route::post('/workers/employees/{employee}/delete', [EmployeeWorkersController::class, 'destroy']);
//PersonalCards
Route::post('/workers/employees/{employee}/personal-card', [App\Http\Livewire\EmployeeWorkers\PersonalCards::class, 'store']);
Route::patch('/workers/employees/personal-card/{personal_card}', [App\Http\Livewire\EmployeeWorkers\PersonalCards::class, 'update']);
//Contracts
Route::post('/workers/employees/{employee}/contract', [App\Http\Livewire\EmployeeWorkers\Contracts::class, 'store']);
Route::patch('/workers/employees/contract/{contract}', [App\Http\Livewire\EmployeeWorkers\Contracts::class, 'update']);
//Insurances
Route::post('/workers/employees/{employee}/insurance', [App\Http\Livewire\EmployeeWorkers\Insurances::class, 'store']);
Route::patch('/workers/employees/insurance/{insurance}', [App\Http\Livewire\EmployeeWorkers\Insurances::class, 'update']);
//Secondments
Route::post('/workers/employees/{employee}/secondments', [App\Http\Livewire\EmployeeWorkers\Secondments::class, 'store']);
Route::get('/workers/employees/secondments/{secondment}/delete', [App\Http\Livewire\EmployeeWorkers\Secondments::class, 'delete']);
Route::post('/workers/employees/secondments/{secondment}/delete', [App\Http\Livewire\EmployeeWorkers\Secondments::class, 'destroy']);
//Leaves
Route::post('/workers/employees/{employee}/leaves', [App\Http\Livewire\EmployeeWorkers\Leaves::class, 'store']);
Route::get('/workers/employees/leaves/{leave}/delete', [App\Http\Livewire\EmployeeWorkers\Leaves::class, 'delete']);
Route::post('/workers/employees/leaves/{leave}/delete', [App\Http\Livewire\EmployeeWorkers\Leaves::class, 'destroy']);
//MilitaryAccountings
Route::post('/workers/employees/{employee}/military-accounting', [App\Http\Livewire\EmployeeWorkers\MilitaryAccountings::class, 'store']);
Route::patch('/workers/employees/military-accounting/{military_accounting}', [App\Http\Livewire\EmployeeWorkers\MilitaryAccountings::class, 'update']);
