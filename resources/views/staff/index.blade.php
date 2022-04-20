@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-evenly">

        <div class="col-md-8 px-0 ms-4">

            <div class="row justify-content-left">
                <button class="p-3 m-3 btn btn-primary d-inline-block"><a href="/staff/{{ $organization->id }}/specialists/create" class="text-white">Добавить должность</a></button>
            </div>

            <div class="row justify-content-left">
                <button class="p-3 m-3 btn btn-primary d-inline-block"><a href="/staff/{{ $organization->id }}/workers/create" class="text-white">Добавить рабочую специальность</a></button>
            </div>

        </div>

    </div>
</div>
@endsection
