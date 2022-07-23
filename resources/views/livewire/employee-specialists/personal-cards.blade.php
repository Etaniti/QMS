<div class="ms-2">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        @if ($employeeSpecialist->employeeSpecialistPersonalCard === null)
            <form action="/specialists/employees/{{ $employee_specialist_id }}/personal-card"
                enctype="multipart/form-data" method="POST">
                @csrf
                <div class="ms-2">
                    <div class="d-flex flex-row">
                        <div class="col-8">
                            <h5 class="mt-4 mb-3">Личная карточка</h5>
                            <input type="text" name="employee_specialist_id" value="{{ $employee_specialist_id }}"
                                hidden />
                            <input type="file" class="form-control" wire:model="employee_personal_card"
                                name="employee_personal_card">
                            @error('employee_personal_card.0')
                                <strong>{{ $message }}</strong>
                            @enderror
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
                <h5 class="mt-4 mb-3">Личная карточка</h5>
                <div class="d-flex flex-row">
                    <a href="{{ URL::asset('storage') }}/{{ $employeeSpecialist->employeeSpecialistPersonalCard->employee_personal_card }}"
                        download="Личная-карточка-сотрудника-{{ $employeeSpecialist->employee_surname }}-{{ $employeeSpecialist->employee_name }}"
                        class="btn btn-outline-dark px-5 py-2">Скачать</a>
                    <button id="edit-button" wire:click="$toggle('showInputs')"
                        class="btn btn-outline-primary px-5 py-2 mx-4">
                        <a wire:click="edit({{ $employeeSpecialist->employeeSpecialistPersonalCard->id }})">
                            Редактировать
                        </a>
                    </button>
                </div>
            </div>
            @if ($showInputs)
                <div class="mt-4">
                    <form
                        action="/specialists/employees/personal-card/{{ $employeeSpecialist->employeeSpecialistPersonalCard->id }}"
                        enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')
                        <div>
                            <div class="d-flex flex-row">
                                <div class="col-8">
                                    <input type="text" name="employee_specialist_id"
                                        value="{{ $employee_specialist_id }}" hidden />
                                    <input type="file" class="form-control" wire:model="employee_personal_card"
                                        name="employee_personal_card">
                                    @error('employee_personal_card.0')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div>
                            <button wire:click="update({{ $employeeSpecialist->employeeSpecialistPersonalCard->id }})" type="submit"
                                class="col-8 mt-4 p-3 btn btn-outline-primary d-inline-block">
                                Сохранить изменения
                            </button>
                        </div>
                    </form>
                </div>
            @endif
        @endif
    </div>
</div>
