@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/specialists/employees/{{ $employeeSpecialist->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row ms-5">
            <div class="col-5 offset-3 mt-4">

                <div class="row pt-4 mb-4 text-center">
                    <h2>Редактирование сотрудника</h2>
                </div>

                <div class="card px-4 pb-4">
                    <div class="card-body px-4">
                        <div class="form-group row">
                            <input type="text" name="specialist_id" value="{{ $employeeSpecialist->specialist_id }}" hidden />
                            <label for="employee_surname" class="col-md-4 col-form-label fw-bold">Фамилия</label>

                            <input id="employee_surname"
                            type="text"
                            class="form-control @error('employee_surname') is-invalid @enderror"
                            name="employee_surname"
                            value="{{ $employeeSpecialist->employee_surname }}"
                            autocomplete="employee_surname" autofocus>

                            @error('employee_surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Фамилия-->
                        </div>

                        <div class="form-group row pt-3">

                            <label for="employee_name" class="col-md-4 col-form-label fw-bold">Имя</label>

                            <input id="employee_name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            name="employee_name"
                            value="{{ $employeeSpecialist->employee_name }}"
                            autocomplete="employee_name" autofocus>

                            @error('employee_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Имя-->
                        </div>

                        <div class="form-group row pt-3">

                            <label for="employee_patronymic" class="col-md-4 col-form-label fw-bold">Отчество</label>

                            <input id="employee_patronymic"
                            type="text"
                            class="form-control @error('employee_patronymic') is-invalid @enderror"
                            name="employee_patronymic"
                            value="{{ $employeeSpecialist->employee_patronymic }}"
                            autocomplete="employee_patronymic" autofocus>

                            @error('employee_patronymic')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Отчество-->
                        </div>

                        <div class="form-group row pt-3">

                            <label for="employee_photo" class="col-md-6 col-form-label fw-bold">Фотография</label>

                            <input id="employee_photo"
                            type="file"
                            class="form-control @error('employee_photo') is-invalid @enderror"
                            name="employee_photo"
                            value="{{ $employeeSpecialist->employee_photo }}">

                            @error('employee_photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Фотография-->
                        </div>

                        <div class="form-group row pt-4">

                            <label for="employee_birth_date" class="col-md-6 col-form-label fw-bold">Дата рождения</label>

                            <input id="employee_birth_date"
                            type="date"
                            class="form-control @error('employee_birth_date') is-invalid @enderror"
                            name="employee_birth_date"
                            value="{{ $employeeSpecialist->employee_birth_date }}">

                            @error('employee_birth_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Дата рождения-->
                        </div>

                        <div class="form-group flex-column pt-4">
                            <label class="fw-bold mb-2">Пол</label>
                            <div class="flex-row justify-content-between">
                                <input type="radio" class="align-middle" name="employee_gender"
                                value="female" {{ $employeeSpecialist->employee_gender == "female" ? 'checked' : '' }}>
                                <label for="employee_gender" class="form-label me-5">Женский</label>

                                <input type="radio" class="align-middle" name="employee_gender"
                                value="male" {{ $employeeSpecialist->employee_gender == "male" ? 'checked' : '' }}>
                                <label for="employee_gender" class="form-label">Мужской</label>
                            </div>
                            <!--Пол-->
                        </div>
                    </div>
                </div>

                <div class="card px-4 pb-4 mt-5">
                    <div class="card-body px-4">
                        <h4 class="card-title text-center pt-3">Образование</h4>

                        <div class="form-group row pt-3">

                            <label for="employee_institution" class="col-md-10 col-form-label fw-bold">Наименование учреждения образования</label>

                            <input id="employee_institution"
                            type="text"
                            class="form-control @error('employee_institution') is-invalid @enderror"
                            name="employee_institution"
                            value="{{ $employeeSpecialist->employee_institution }}"
                            autocomplete="employee_institution" autofocus>

                            @error('employee_institution')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Наименование учреждения образования-->
                        </div>

                        <div class="form-group row pt-3">

                            <label for="employee_graduation_date" class="col-md-10 col-form-label fw-bold">Дата окончания учреждения образования</label>

                            <input id="employee_graduation_date"
                            type="date"
                            class="form-control @error('employee_graduation_date') is-invalid @enderror"
                            name="employee_graduation_date"
                            value="{{ $employeeSpecialist->employee_graduation_date }}">

                            @error('employee_graduation_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Дата окончания учреждения образования-->
                        </div>

                        <div class="form-group row pt-4">

                            <label for="employee_specialization" class="col-md-10 col-form-label fw-bold">Специальность по образованию</label>

                            <input id="employee_specialization"
                            type="text"
                            class="form-control @error('employee_specialization') is-invalid @enderror"
                            name="employee_specialization"
                            value="{{ $employeeSpecialist->employee_specialization }}">

                            @error('employee_specialization')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Специальность по образованию-->
                        </div>

                    </div>
                </div>

                <div class="card px-4 pb-4 mt-5">
                    <div class="card-body px-4">
                        <h4 class="card-title text-center pt-3">Семейное положение</h4>

                        <div class="form-group row pt-4">
                            <div class="flex-row justify-content-between">
                                <input type="radio" class="align-middle"
                                name="employee_family_status" onclick="hideInput_1();"
                                value="single" {{ $employeeSpecialist->employee_family_status == "single" ? 'checked' : '' }}>
                                <label for="employee_family_status" class="form-label me-5">Холост</label>

                                <input type="radio" class="align-middle"
                                name="employee_family_status" onclick="showInput_1();"
                                value="married" {{ $employeeSpecialist->employee_family_status == "married" ? 'checked' : '' }}>
                                <label for="employee_family_status"
                                class="form-label">Женат / замужем</label>
                            </div>
                        </div>

                        @if ($employeeSpecialist->employee_family_structure_name_1 !== null)
                            <div id="family_structure_1" class="form-group row pt-3">
                                <div class="text-center">
                                    <label for="employee_family_structure_1" class="mb-3 text-center col-form-label fs-5">Состав семьи</label>
                                </div>
                                <div class="card border-secondary p-4">
                                    <label for="employee_family_structure_name_1" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_1"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_1') is-invalid @enderror"
                                    name="employee_family_structure_name_1"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_1 }}">

                                    @error('employee_family_structure_name_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_1" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_1"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_1') is-invalid @enderror"
                                    name="employee_family_structure_date_1"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_1 }}">

                                    @error('employee_family_structure_date_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_2();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 1-->
                            </div>
                        @else
                            <div id="family_structure_1" class="hide form-group row pt-3">
                                <div class="text-center">
                                    <label for="employee_family_structure_1" class="mb-3 text-center col-form-label fs-5">Состав семьи</label>
                                </div>
                                <div class="card border-secondary p-4">
                                    <label for="employee_family_structure_name_1" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_1"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_1') is-invalid @enderror"
                                    name="employee_family_structure_name_1"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_1 }}">

                                    @error('employee_family_structure_name_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_1" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_1"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_1') is-invalid @enderror"
                                    name="employee_family_structure_date_1"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_1 }}">

                                    @error('employee_family_structure_date_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_2();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 1-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_2 !== null)
                            <div id="family_structure_2" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_2();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_2" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_2"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_2') is-invalid @enderror"
                                    name="employee_family_structure_name_2"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_2 }}">

                                    @error('employee_family_structure_name_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_2" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_2"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_2') is-invalid @enderror"
                                    name="employee_family_structure_date_2"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_2 }}">

                                    @error('employee_family_structure_date_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_3();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 2-->
                            </div>
                        @else
                            <div id="family_structure_2" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_2();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_2" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_2"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_2') is-invalid @enderror"
                                    name="employee_family_structure_name_2"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_2 }}">

                                    @error('employee_family_structure_name_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_2" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_2"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_2') is-invalid @enderror"
                                    name="employee_family_structure_date_2"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_2 }}">

                                    @error('employee_family_structure_date_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_3();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 2-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_3 !== null)
                            <div id="family_structure_3" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_3();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_3" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_3"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_3') is-invalid @enderror"
                                    name="employee_family_structure_name_3"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_3 }}">

                                    @error('employee_family_structure_name_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_3" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_3"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_3') is-invalid @enderror"
                                    name="employee_family_structure_date_3"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_3 }}">

                                    @error('employee_family_structure_date_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_4();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 3-->
                            </div>
                        @else
                            <div id="family_structure_3" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_3();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_3" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_3"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_3') is-invalid @enderror"
                                    name="employee_family_structure_name_3"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_3 }}">

                                    @error('employee_family_structure_name_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_3" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_3"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_3') is-invalid @enderror"
                                    name="employee_family_structure_date_3"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_3 }}">

                                    @error('employee_family_structure_date_3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_4();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 3-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_4 !== null)
                            <div id="family_structure_4" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_4();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_4" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_4"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_4') is-invalid @enderror"
                                    name="employee_family_structure_name_4"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_4 }}">

                                    @error('employee_family_structure_name_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_4" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_4"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_4') is-invalid @enderror"
                                    name="employee_family_structure_date_4"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_4 }}">

                                    @error('employee_family_structure_date_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_5();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 4-->
                            </div>
                        @else
                            <div id="family_structure_4" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_4();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_4" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_4"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_4') is-invalid @enderror"
                                    name="employee_family_structure_name_4"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_4 }}">

                                    @error('employee_family_structure_name_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_4" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_4"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_4') is-invalid @enderror"
                                    name="employee_family_structure_date_4"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_4 }}">

                                    @error('employee_family_structure_date_4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_5();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 4-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_5 !== null)
                            <div id="family_structure_5" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_5();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_5" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_5"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_5') is-invalid @enderror"
                                    name="employee_family_structure_name_5"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_5 }}">

                                    @error('employee_family_structure_name_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_5" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_5"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_5') is-invalid @enderror"
                                    name="employee_family_structure_date_5"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_5 }}">

                                    @error('employee_family_structure_date_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_6();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 5-->
                            </div>
                        @else
                            <div id="family_structure_5" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_5();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_5" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_5"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_5') is-invalid @enderror"
                                    name="employee_family_structure_name_5"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_5 }}">

                                    @error('employee_family_structure_name_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_5" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_5"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_5') is-invalid @enderror"
                                    name="employee_family_structure_date_5"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_5 }}">

                                    @error('employee_family_structure_date_5')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_6();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 5-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_6 !== null)
                            <div id="family_structure_6" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_6();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_6" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_6"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_6') is-invalid @enderror"
                                    name="employee_family_structure_name_6"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_6 }}">

                                    @error('employee_family_structure_name_6')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_6" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_6"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_6') is-invalid @enderror"
                                    name="employee_family_structure_date_6"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_6 }}">

                                    @error('employee_family_structure_date_6')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_7();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 6-->
                            </div>
                        @else
                            <div id="family_structure_6" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_6();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_6" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_6"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_6') is-invalid @enderror"
                                    name="employee_family_structure_name_6"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_6 }}">

                                    @error('employee_family_structure_name_6')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_6" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_6"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_6') is-invalid @enderror"
                                    name="employee_family_structure_date_6"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_6 }}">

                                    @error('employee_family_structure_date_6')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_7();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 6-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_7 !== null)
                            <div id="family_structure_7" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_7();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_7" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_7"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_7') is-invalid @enderror"
                                    name="employee_family_structure_name_7"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_7 }}">

                                    @error('employee_family_structure_name_7')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_7" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_7"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_7') is-invalid @enderror"
                                    name="employee_family_structure_date_7"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_7 }}">

                                    @error('employee_family_structure_date_7')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_8();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 7-->
                            </div>
                        @else
                            <div id="family_structure_7" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_7();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_7" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_7"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_7') is-invalid @enderror"
                                    name="employee_family_structure_name_7"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_7 }}">

                                    @error('employee_family_structure_name_7')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_7" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_7"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_7') is-invalid @enderror"
                                    name="employee_family_structure_date_7"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_7 }}">

                                    @error('employee_family_structure_date_7')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_8();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 7-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_8 !== null)
                            <div id="family_structure_8" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_8();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_8" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_8"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_8') is-invalid @enderror"
                                    name="employee_family_structure_name_8"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_8 }}">

                                    @error('employee_family_structure_name_8')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_8" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_8"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_8') is-invalid @enderror"
                                    name="employee_family_structure_date_8"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_8 }}">

                                    @error('employee_family_structure_date_8')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_9();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 8-->
                            </div>
                        @else
                            <div id="family_structure_8" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_8();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_8" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_8"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_8') is-invalid @enderror"
                                    name="employee_family_structure_name_8"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_8 }}">

                                    @error('employee_family_structure_name_8')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_8" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_8"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_8') is-invalid @enderror"
                                    name="employee_family_structure_date_8"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_8 }}">

                                    @error('employee_family_structure_date_8')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_9();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 8-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_9 !== null)
                            <div id="family_structure_9" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_9();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_9" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_9"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_9') is-invalid @enderror"
                                    name="employee_family_structure_name_9"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_9 }}">

                                    @error('employee_family_structure_name_9')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_9" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_9"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_9') is-invalid @enderror"
                                    name="employee_family_structure_date_9"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_9 }}">

                                    @error('employee_family_structure_date_9')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_10();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 9-->
                            </div>
                        @else
                            <div id="family_structure_9" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_9();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_9" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_9"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_9') is-invalid @enderror"
                                    name="employee_family_structure_name_9"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_9 }}">

                                    @error('employee_family_structure_name_9')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_9" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_9"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_9') is-invalid @enderror"
                                    name="employee_family_structure_date_9"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_9 }}">

                                    @error('employee_family_structure_date_9')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" name="add" onclick="showInput_10();" class="mt-4 mb-2 col-md-4 offset-4 btn btn-sm btn-outline-primary rounded-pill">
                                    <span class="fs-4">+</span>
                                </button>
                                <!--Состав семьи 9-->
                            </div>
                        @endif

                        @if ($employeeSpecialist->employee_family_structure_name_10 !== null)
                            <div id="family_structure_10" class="form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_10();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_10" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_10"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_10') is-invalid @enderror"
                                    name="employee_family_structure_name_10"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_10 }}">

                                    @error('employee_family_structure_name_10')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_10" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_10"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_10') is-invalid @enderror"
                                    name="employee_family_structure_date_10"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_10 }}">

                                    @error('employee_family_structure_date_10')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--Состав семьи 10-->
                            </div>
                        @else
                            <div id="family_structure_10" class="hide form-group row pt-3">
                                <div class="card border-secondary p-4">
                                    <div class="row justify-content-end">
                                        <button type="button" class="btn-close" aria-label="Close" onclick="hideInput_10();"></button>
                                    </div>
                                    <label for="employee_family_structure_name_10" class="col-md-6 col-form-label fw-bold">Степень родства</label>

                                    <input id="employee_family_structure_name_10"
                                    type="text"
                                    class="color-white form-control @error('employee_family_structure_name_10') is-invalid @enderror"
                                    name="employee_family_structure_name_10"
                                    value="{{ $employeeSpecialist->employee_family_structure_name_10 }}">

                                    @error('employee_family_structure_name_10')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <label for="employee_family_structure_date_10" class="col-md-6 col-form-label fw-bold pt-3">Дата рождения</label>

                                    <input id="employee_family_structure_date_10"
                                    type="date"
                                    class="mb-3 form-control @error('employee_family_structure_date_10') is-invalid @enderror"
                                    name="employee_family_structure_date_10"
                                    value="{{ $employeeSpecialist->employee_family_structure_date_10 }}">

                                    @error('employee_family_structure_date_10')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--Состав семьи 10-->
                            </div>
                        @endif
                    </div>
                    <!--Состав семьи-->
                </div>

                <div class="card px-4 pb-4 mt-5">
                    <div class="card-body px-4">
                        <h4 class="card-title text-center pt-3">Паспортные данные</h4>
                        <div class="d-flex flex-row justify-content-between">
                            <div class="form-group row col-md-4 pt-3 mr-2">
                                <label for="employee_passport_series" class="col-md-8 col-form-label fw-bold">Серия</label>

                                <input id="employee_passport_series"
                                type="text"
                                class="form-control @error('employee_passport_series') is-invalid @enderror"
                                name="employee_passport_series"
                                value="{{ $employeeSpecialist->employee_passport_series }}">

                                @error('employee_passport_series')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--Серия паспорта-->
                            </div>

                            <div class="form-group row col-md-7 pt-3 ml-3">
                                <label for="employee_passport_number" class="col-md-6 col-form-label fw-bold">Номер</label>

                                <input id="employee_passport_number"
                                type="text"
                                class="form-control @error('employee_passport_number') is-invalid @enderror"
                                name="employee_passport_number"
                                value="{{ $employeeSpecialist->employee_passport_number }}">

                                @error('employee_passport_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--Номер паспорта-->
                            </div>
                        </div>

                        <div class="form-group row pt-3 ml-3">
                            <label for="employee_passport_issuance" class="col-md-6 col-form-label fw-bold">Кем выдан</label>

                            <input id="employee_passport_issuance"
                            type="text"
                            class="form-control @error('employee_passport_issuance') is-invalid @enderror"
                            name="employee_passport_issuance"
                            value="{{ $employeeSpecialist->employee_passport_issuance }}">

                            @error('employee_passport_issuance')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--Кем выдан-->
                        </div>

                        <div class="form-group row pt-3 ml-3">
                            <label for="employee_passport_issuance_date" class="col-md-6 col-form-label fw-bold">Дата выдачи</label>

                            <input id="employee_passport_issuance_date"
                            type="date"
                            class="form-control @error('employee_passport_issuance_date') is-invalid @enderror"
                            name="employee_passport_issuance_date"
                            value="{{ $employeeSpecialist->employee_passport_issuance_date }}">

                            @error('employee_passport_issuance_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--Дата выдачи-->
                        </div>

                        <div class="form-group row pt-3 ml-3">
                            <label for="employee_passport_issuance_term" class="col-md-6 col-form-label fw-bold">На срок</label>

                            <input id="employee_passport_issuance_term"
                            type="date"
                            class="form-control @error('employee_passport_issuance_term') is-invalid @enderror"
                            name="employee_passport_issuance_term"
                            value="{{ $employeeSpecialist->employee_passport_issuance_term }}">

                            @error('employee_passport_issuance_term')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--На срок-->
                        </div>
                    </div>
                </div>

                <div class="card px-4 pb-4 mt-5">
                    <div class="card-body px-4">
                        <h4 class="card-title text-center pt-3">Проживание</h4>
                        <div class="form-group row pt-3">
                            <label for="employee_living_place" class="col-md-8 col-form-label fw-bold">Место жительства</label>

                            <input id="employee_living_place"
                            type="text"
                            class="form-control @error('employee_living_place') is-invalid @enderror"
                            name="employee_living_place"
                            value="{{ $employeeSpecialist->employee_living_place }}">

                            @error('employee_living_place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--Место жительства-->
                        </div>

                        <div class="form-group row pt-3">
                            <label for="employee_residence_place" class="col-md-6 col-form-label fw-bold">Место пребывания</label>

                            <input id="employee_residence_place"
                            type="text"
                            class="form-control @error('employee_residence_place') is-invalid @enderror"
                            name="employee_residence_place"
                            value="{{ $employeeSpecialist->employee_residence_place }}">

                            @error('employee_residence_place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--Место пребывания-->
                        </div>
                        <!--Проживание-->
                    </div>
                </div>

                <div class="card px-4 pb-4 mt-5">
                    <div class="card-body px-4">
                        <div class="form-group row pt-3">

                            <label for="employee_hiring_date" class="col-md-6 col-form-label fw-bold">Дата приема на работу</label>

                            <input id="employee_hiring_date"
                            type="date"
                            class="form-control @error('employee_hiring_date') is-invalid @enderror"
                            name="employee_hiring_date"
                            value="{{ $employeeSpecialist->employee_hiring_date }}">

                            @error('employee_hiring_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <!--Дата приема на работу-->
                        </div>
                    </div>
                </div>

                <div class="row mt-4 mb-5 px-2 col-md-13">
                    <button class="p-3 mt-3 btn btn-primary d-inline-block">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    //1
    function hideInput_1() {
        document.getElementById('family_structure_1').style.display = 'none';
    }
    function showInput_1() {
        document.getElementById('family_structure_1').style.display = 'block';
    }

    //2
    function hideInput_2() {
        document.getElementById('family_structure_2').style.display = 'none';
    }
    function showInput_2() {
        document.getElementById('family_structure_2').style.display = 'block';
    }

    //3
    function hideInput_3() {
        document.getElementById('family_structure_3').style.display = 'none';
    }
    function showInput_3() {
        document.getElementById('family_structure_3').style.display = 'block';
    }

    //4
    function hideInput_4() {
        document.getElementById('family_structure_4').style.display = 'none';
    }
    function showInput_4() {
        document.getElementById('family_structure_4').style.display = 'block';
    }

    //5
    function hideInput_5() {
        document.getElementById('family_structure_5').style.display = 'none';
    }
    function showInput_5() {
        document.getElementById('family_structure_5').style.display = 'block';
    }

    //6
    function hideInput_6() {
        document.getElementById('family_structure_6').style.display = 'none';
    }
    function showInput_6() {
        document.getElementById('family_structure_6').style.display = 'block';
    }

    //7
    function hideInput_7() {
        document.getElementById('family_structure_7').style.display = 'none';
    }
    function showInput_7() {
        document.getElementById('family_structure_7').style.display = 'block';
    }

    //8
    function hideInput_8() {
        document.getElementById('family_structure_8').style.display = 'none';
    }
    function showInput_8() {
        document.getElementById('family_structure_8').style.display = 'block';
    }

    //9
    function hideInput_9() {
        document.getElementById('family_structure_9').style.display = 'none';
    }
    function showInput_9() {
        document.getElementById('family_structure_9').style.display = 'block';
    }

    //10
    function hideInput_10() {
        document.getElementById('family_structure_10').style.display = 'none';
    }
    function showInput_10() {
        document.getElementById('family_structure_10').style.display = 'block';
    }
</script>
@endsection
