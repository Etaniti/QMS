<div class="ms-2">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <div class="col-9">
            <h5 class="mb-4">Отпуска</h5>
            <table class="table table-hover mb-4">
                <thead>
                    <tr>
                        <th>№</th>
                        <th class="text-center align-middle">Дата начала</th>
                        <th class="text-center align-middle">Дата окончания</th>
                        <th class="text-center align-middle">Срок</th>
                        <th class="text-center align-middle">Заявление</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeeWorkerLeaves as $employeeWorkerLeave)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="text-center align-middle">
                                {{ date('d-m-Y', strtotime($employeeWorkerLeave->employee_leave_start)) }}
                            </td>
                            <td class="text-center align-middle">
                                {{ date('d-m-Y', strtotime($employeeWorkerLeave->employee_leave_end)) }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $secondmentTerm = abs(round((strtotime($employeeWorkerLeave->employee_leave_end) - strtotime($employeeWorkerLeave->employee_leave_start)) / 86400)) + 1 }}
                                @if ($secondmentTerm < 5)
                                    дня
                                @else
                                    дней
                                @endif
                            </td>
                            <td class="text-center align-middle">
                                <a href="{{ URL::asset('storage') }}/{{ $employeeWorkerLeave->employee_leave_request }}"
                                    download="Заявление-на-отпуск-от-{{ date('d-m-Y', strtotime($employeeWorkerLeave->employee_leave_start)) }}">скачать</a>
                            </td>
                            <td class="text-center align-middle">
                                <a href="/workers/employees/leaves/{{ $employeeWorkerLeave->id }}/delete"
                                    class="btn btn-outline-secondary btn-sm">Удалить отпуск</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination mb-3">
                {!! $employeeWorkerLeaves->links() !!}
            </div>
        </div>
        <div class="d-flex justify-content-center col-9">
            <button id="add_secondment_inputs" type="button" name="add" wire:click="$toggle('showInputs', true)"
                class="mb-2 col-3 btn btn-sm btn-outline-primary rounded-pill">
                <span class="fs-4">+</span>
            </button>
        </div>
        @if ($showInputs)
            <form action="/workers/employees/{{ $employeeWorker->id }}/leaves" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="card col-9 justify-content-center px-4 py-2 mt-3">
                    <h5 class="mt-4 ms-4">Срок</h5>
                    <div class="d-flex flex-row justify-content-start ms-4">
                        <div class="col-5">
                            <input type="text" name="employee_worker_id" value="{{ $employee_worker_id }}"
                                hidden />
                            <label for="employee_leave_start" class="col-form-label fw-bold">Дата начала</label>
                            <input type="date" class="form-control" wire:model="employee_leave_start"
                                name="employee_leave_start" value="{{ Carbon\Carbon::now()->toDateString() }}">
                            @error('employee_leave_start')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-5 ms-5">
                            <label for="employee_leave_end" class="col-form-label fw-bold">Дата окончания</label>
                            <input type="date" class="form-control" wire:model="employee_leave_end"
                                name="employee_leave_end" value="{{ Carbon\Carbon::now()->toDateString() }}">
                            @error('employee_leave_end')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                    <div class="ms-4 mb-4 col-11">
                        <h5 class="mt-4">Заявление</h5>
                        <input type="file" class="form-control" wire:model="employee_leave_request"
                            name="employee_leave_request">
                        @error('employee_leave_request')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <button type="submit" class="col-11 ms-4 p-3 mb-4 btn btn-outline-primary d-inline-block">
                        Сохранить
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>
