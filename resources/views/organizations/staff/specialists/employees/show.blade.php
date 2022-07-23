@extends('layouts.app')

@section('content')
    @livewireStyles
    <div class="container">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-end mt-4">
                <a href="/staff/specialists/{{ $specialist->id }}"
                    class="row px-5 py-2 me-1 btn btn-outline-primary d-inline-block">Назад</a>
            </div>
            <div class="d-flex flex-row align-items-center justify-content-evenly mb-5">
                <div class="d-flex flex-column">
                    <h3>{{ $employeeSpecialist->employee_surname }} {{ $employeeSpecialist->employee_name }}
                        {{ $employeeSpecialist->employee_patronymic }}</h3>
                    <h5>Должность {{ $specialist->specialist_name }}</h5>
                </div>
                @if ($employeeSpecialist->employee_photo !== null)
                    <img src="/storage/{{ $employeeSpecialist->employee_photo }}" class="rounded-circle">
                @else
                    <div class="rounded-circle">
                        <svg width="150" height="150" viewBox="0 0 200 200" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="100" cy="100" r="100" fill="#D9D9D9" />
                            <circle cx="99" cy="55" r="35" fill="#f8fafc" />
                            <path
                                d="M162 167C162 204.003 133.794 234 99 234C64.2061 234 36 204.003 36 167C36 129.997 64.2061 100 99 100C133.794 100 162 129.997 162 167Z"
                                fill="#f8fafc" />
                        </svg>

                    </div>
                @endif
            </div>
            @can('update-employeeSpecialist', $employeeSpecialist)
                <div class="row justify-content-center col-md-13 mx-1 mb-5">
                    <a href="/specialists/employees/{{ $employeeSpecialist->id }}/edit"
                        class="mt-2 p-2 btn btn-primary d-inline-block">Редактировать</a>
                    <a href="/specialists/employees/{{ $employeeSpecialist->id }}/delete"
                        class="mt-2 p-2 btn btn-outline-secondary d-inline-block">Удалить</a>
                </div>
            @endcan
            <ul id="#tabs" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#personal_data" data-toggle="tab" class="nav-link me-2">
                        Личные данные
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#employment_contract" data-toggle="tab" class="nav-link me-2">
                        Трудовой договор и контракт
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#insurance" data-toggle="tab" class="nav-link me-2">
                        Страхование
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#benefits" data-toggle="tab" class="nav-link me-2">
                        Льготы
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#secondment" data-toggle="tab" class="nav-link me-2">
                        Командирование
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#leave" data-toggle="tab" class="nav-link me-2">
                        Отпуска
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#military_accounting" data-toggle="tab" onclick="showMilitaryAccounting();"
                        class="nav-link me-2">
                        Воинский учет
                    </a>
                </li>
            </ul>

            <div class="tab-content offset-2 p-5">
                <div id="personal_data" class="tab-pane fade" role="tabpanel">
                    <div class="ms-2">
                        <p><span class="text-muted">Дата рождения:
                            </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_birth_date)) }}</b></p>
                        <h4 class="mt-4 mb-3">Паспортные данные</h4>
                        <p>
                            <span class="text-muted">Серия:
                            </span><b>{{ $employeeSpecialist->employee_passport_series }}</b>
                            <span class="text-muted">Номер:
                            </span><b>{{ $employeeSpecialist->employee_passport_number }}</b>
                            <span class="text-muted">Выдан:
                            </span><b>{{ $employeeSpecialist->employee_passport_issuance }}</b><br>
                            <span class="text-muted">Дата выдачи:
                            </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_passport_issuance_date)) }}</b><br>
                            <span class="text-muted">На срок до
                            </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_passport_issuance_term)) }}</b><br>
                        </p>
                        <h4 class="mt-4 mb-3">Проживание</h4>
                        <p>
                            <span class="text-muted">Адрес регистрации по месту жительства:
                            </span><b>{{ $employeeSpecialist->employee_living_place }}</b><br>
                            <span class="text-muted">Адрес фактического проживания:
                            </span><b>{{ $employeeSpecialist->employee_residence_place }}</b>
                        </p>
                        @if ($employeeSpecialist->employee_family_status == 'married')
                            <h4 class="mt-4 mb-3">Состав семьи</h4>
                            <p>
                                <span class="text-muted">Степень родства:
                                </span><b>{{ $employeeSpecialist->employee_family_structure_name_1 }}</b><br>
                                <span class="text-muted">Дата рождения:
                                </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_1)) }}</b>
                            </p>
                            @if ($employeeSpecialist->employee_family_structure_name_2 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_2 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_2)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_3 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_3 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_3)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_4 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_4 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_4)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_5 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_5 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_5)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_6 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_6 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_6)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_7 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_7 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_7)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_8 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_8 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_8)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_9 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_9 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_9)) }}</b>
                                </p>
                            @endif
                            @if ($employeeSpecialist->employee_family_structure_name_10 !== null)
                                <p>
                                    <span class="text-muted">Степень родства:
                                    </span><b>{{ $employeeSpecialist->employee_family_structure_name_10 }}</b><br>
                                    <span class="text-muted">Дата рождения:
                                    </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_family_structure_date_10)) }}</b>
                                </p>
                            @endif
                        @endif
                        <h4 class="mt-4 mb-3">Образование</h4>
                        <p>
                            <span class="text-muted">Наименование учреждения образования:
                            </span><b>{{ $employeeSpecialist->employee_institution }}</b><br>
                            <span class="text-muted">Дата окончания учреждения образования:
                            </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_graduation_date)) }}</b><br>
                            <span class="text-muted">Специальность по образованию:
                            </span><b>{{ $employeeSpecialist->employee_specialization }}</b>
                        </p>
                    </div>
                    @livewire('employee-specialists.personal-cards', [
                        'employee_specialist_id' => $employeeSpecialist->id,
                        'employeeSpecialist' => $employeeSpecialist,
                    ])
                    @livewireScripts
                    <!--personal_data-->
                </div>

                <div id="employment_contract" class="tab-pane fade" role="tabpanel">
                    @livewire('employee-specialists.contracts', [
                        'employee_specialist_id' => $employeeSpecialist->id,
                        'employeeSpecialist' => $employeeSpecialist,
                    ])
                    @livewireScripts
                </div>
                <!--employment-contract-->

                <div id="insurance" class="tab-pane fade" role="tabpanel">
                    @livewire('employee-specialists.insurances', [
                        'employee_specialist_id' => $employeeSpecialist->id,
                        'employeeSpecialist' => $employeeSpecialist,
                    ])
                    @livewireScripts
                    <!--insurance-->
                </div>

                <div id="benefits" class="tab-pane fade" role="tabpanel">
                    Льготы
                    <!--benefits-->
                </div>

                <div id="secondment" class="tab-pane fade" role="tabpanel">
                    @livewire('employee-specialists.secondments', [
                        'employeeSpecialist' => $employeeSpecialist,
                        'employee_specialist_id' => $employeeSpecialist->id,
                    ])
                    @livewireScripts
                    <!--secondment-->
                </div>

                <div id="leave" class="tab-pane fade" role="tabpanel">
                    @livewire('employee-specialists.leaves', [
                        'employee_specialist_id' => $employeeSpecialist->id,
                        'employeeSpecialist' => $employeeSpecialist,
                    ])
                    @livewireScripts
                    <!--leave-->
                </div>

                <div id="military_accounting" class="tab-pane fade" role="tabpanel">
                    @livewire('employee-specialists.military-accountings', [
                        'employee_specialist_id' => $employeeSpecialist->id,
                        'employeeSpecialist' => $employeeSpecialist,
                    ])
                    @livewireScripts
                    <!--military_accounting-->
                </div>
            </div>
        </div>
    </div>
    <script>
        var tabElement = document.querySelector('a[data-toggle="tab"]')
        tabElement.addEventListener('shown.bs.tab', function(event) {
            event.target // newly activated tab
            event.relatedTarget // previous active tab
        })

        $(document).ready(function() {
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('#tabs a[href="' + activeTab + '"]').tab('show');
            }
        });
    </script>
    @livewireScripts
@endsection
