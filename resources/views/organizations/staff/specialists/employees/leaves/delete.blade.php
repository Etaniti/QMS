@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center flex-column">
            <div>
                <h2 class="mt-4"><strong>{{ $title }}</strong></h2>
            </div>
            <div class="justify-content-center mt-4 mb-4">
                <form method="POST">
                    @csrf
                    <h5>Вы действительно хотите удалить отпуск от {{ date('d-m-Y', strtotime($employeeSpecialistLeave->employee_leave_start)) }} до {{ date('d-m-Y', strtotime($employeeSpecialistLeave->employee_leave_end)) }}?</h5>
                    <button type="submit" class="p-2 btn btn-danger d-inline-block">Удалить</button>
                    <a href="/specialists/{{ $employeeSpecialistLeave->employeeSpecialist->specialist_id }}/employees/{{ $employeeSpecialistLeave->employeeSpecialist->id }}" class="p-2 m-3 mt-3 btn btn-primary d-inline-block">Отмена</a>
                </form>
            </div>
        </div>
    </div>
@endsection
