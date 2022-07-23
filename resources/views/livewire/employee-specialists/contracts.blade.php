<div class="ms-2">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        @if ($employeeSpecialist->employeeSpecialistContract === null)
            <form action="/specialists/employees/{{ $employeeSpecialist->id }}/contract" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="ms-2">
                    <div class="d-flex flex-row">
                        <div class="col-8">
                            <p><span class="text-muted">Дата приема на работу:
                                </span><b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_hiring_date)) }}</b>
                            </p>
                            <h5 class="mt-4 mb-3">Трудовой договор</h5>

                            <div class="form-group flex-column mb-3">
                                <input type="text" name="employee_specialist_id"
                                    value="{{ $employee_specialist_id }}" hidden />
                                <label class="fw-bold mb-3">Срок трудового договора</label>
                                <div class="d-flex flex-row justify-content-between col-4">
                                    <input type="radio" class="align-self-center"
                                        wire:model="employment_contract_type" value="indefinite"
                                        name="employment_contract_type" wire:click="hideInputs()" checked>
                                    <label for="employment_contract_type"
                                        class="mt-2 ms-2 col-10 form-label me-5">Неопределенный
                                        срок</label>

                                    <input type="radio" class="align-self-center"
                                        wire:model="employment_contract_type" value="definite"
                                        name="employment_contract_type" wire:click="$toggle('showInputs', true)">
                                    <label for="employment_contract_type"
                                        class="mt-2 ms-2 col-10 form-label">Определенный срок</label>
                                </div>
                                <!--Срок трудового договора-->
                            </div>
                            @if ($showInputs)
                                <div class="mt-4 mb-4 d-flex flex-row justify-content-start">
                                    <div class="d-flex me-5">
                                        <div class="me-5 col-7">
                                            <label for="employment_contract_term_start"
                                                class="col-form-label fw-bold">Дата
                                                заключения трудового договора</label>
                                            <input type="date" wire:model="employment_contract_term_start"
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="employment_contract_term_start"
                                                value="{{ Carbon\Carbon::now()->toDateString() }}"
                                                autocomplete="employment_contract_term_start" autofocus>

                                            @error('employment_contract_term_start')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-7">
                                            <label for="employment_contract_term_end"
                                                class="col-form-label fw-bold">Окончание
                                                действия трудового договора</label>
                                            <input type="date" wire:model="employment_contract_term_end"
                                                class="form-control @error('name') is-invalid @enderror"
                                                name="employment_contract_term_end"
                                                value="{{ Carbon\Carbon::now()->toDateString() }}"
                                                autocomplete="employment_contract_term_end" autofocus>

                                            @error('employment_contract_term_end')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="mt-1">
                                <label for="employment_contract" class="col-form-label fw-bold">Трудовой
                                    договор</label>
                                <input type="file" wire:model="employment_contract"
                                    class="form-control @error('name') is-invalid @enderror" name="employment_contract">
                                @error('employment_contract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--Трудовой договор-->
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="col-8 mt-4 ms-2 p-3 btn btn-outline-primary d-inline-block">
                        Сохранить
                    </button>
                </div>
            </form>
        @else
            <div>
                <p class="text-muted">Дата приема на работу:
                    <span class="text-dark">
                        <b>{{ date('d-m-Y', strtotime($employeeSpecialist->employee_hiring_date)) }}</b>
                    </span>
                </p>
                <p class="text-muted">Дата заключения трудового договора:
                    <span class="text-dark">
                        <b>{{ date('d-m-Y', strtotime($employeeSpecialist->employeeSpecialistContract->employment_contract_term_start)) }}</b>
                    </span>
                </p>
                <p class="text-muted">Окончание действия трудового договора:
                    <span class="text-dark">
                        <b>{{ date('d-m-Y', strtotime($employeeSpecialist->employeeSpecialistContract->employment_contract_term_end)) }}</b>
                    </span>
                </p>
                <p class="text-muted">Срок трудового договора:
                    <span class="text-dark">
                        <b>{{ Carbon\Carbon::parse($employeeSpecialist->employeeSpecialistContract->employment_contract_term_start)->diffInMonths(Carbon\Carbon::parse($employeeSpecialist->employeeSpecialistContract->employment_contract_term_end)) }}
                            месяцев</b>
                    </span>
                </p>
                <h5 class="mt-3 mb-3">Трудовой договор</h5>
                <a href="{{ URL::asset('storage') }}/{{ $employeeSpecialist->employeeSpecialistContract->employment_contract }}"
                    download="Трудовой-договор-сотрудника-{{ $employeeSpecialist->employee_surname }}-{{ $employeeSpecialist->employee_name }}-от-{{ $employeeSpecialist->employeeSpecialistContract->employment_contract_term_start }}"
                    class="btn btn-outline-dark px-5 py-2">Скачать</a>
                <button id="edit-button" wire:click="$toggle('showInputs')"
                    class="btn btn-outline-primary px-5 py-2 mx-4">
                    <a wire:click="edit({{ $employeeSpecialist->employeeSpecialistContract->id }})">
                        Редактировать
                    </a>
                </button>
            </div>
            @if ($showInputs)
                <form action="/specialists/employees/contract/{{ $employeeSpecialist->employeeSpecialistContract->id }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mt-5 ms-2">
                        <div class="d-flex flex-row">
                            <div class="col-8">
                                <div class="form-group flex-column mb-3">
                                    <input type="text" name="employee_specialist_id"
                                        value="{{ $employee_specialist_id }}" hidden />
                                    <label class="fw-bold mb-3">Срок трудового договора</label>
                                    <div class="d-flex flex-row justify-content-between col-4">
                                        <input type="radio" class="align-self-center"
                                            wire:model="employment_contract_type" value="indefinite"
                                            name="employment_contract_type" wire:click="hideUpdateInputs()">
                                        <label for="employment_contract_type"
                                            class="mt-2 ms-2 col-10 form-label me-5">Неопределенный
                                            срок</label>

                                        <input type="radio" class="align-self-center"
                                            wire:model="employment_contract_type" value="definite"
                                            name="employment_contract_type" wire:click="$toggle('showUpdateInputs', true)">
                                        <label for="employment_contract_type"
                                            class="mt-2 ms-2 col-10 form-label">Определенный срок</label>
                                    </div>
                                    <!--Срок трудового договора-->
                                </div>
                                @if ($showUpdateInputs)
                                    <div class="mt-4 mb-4 d-flex flex-row justify-content-start">
                                        <div class="d-flex me-5">
                                            <div class="me-5 col-7">
                                                <label for="employment_contract_term_start"
                                                    class="col-form-label fw-bold">Дата
                                                    заключения трудового договора</label>
                                                <input type="date" wire:model="employment_contract_term_start"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="employment_contract_term_start"
                                                    value="{{ Carbon\Carbon::now()->toDateString() }}"
                                                    autocomplete="employment_contract_term_start" autofocus>

                                                @error('employment_contract_term_start')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-7">
                                                <label for="employment_contract_term_end"
                                                    class="col-form-label fw-bold">Окончание
                                                    действия трудового договора</label>
                                                <input type="date" wire:model="employment_contract_term_end"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    name="employment_contract_term_end"
                                                    value="{{ Carbon\Carbon::now()->toDateString() }}"
                                                    autocomplete="employment_contract_term_end" autofocus>

                                                @error('employment_contract_term_end')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="mt-1">
                                    <label for="employment_contract" class="col-form-label fw-bold">Трудовой
                                        договор</label>
                                    <input type="file" wire:model="employment_contract"
                                        class="form-control @error('name') is-invalid @enderror"
                                        name="employment_contract">
                                    @error('employment_contract')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--Трудовой договор-->
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" wire:click="update({{ $employeeSpecialist->employeeSpecialistContract->id }})" class="col-8 mt-4 ms-2 p-3 btn btn-outline-primary d-inline-block">
                            Сохранить изменения
                        </button>
                    </div>
                </form>
            @endif
        @endif
    </div>
</div>
