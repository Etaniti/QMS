@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column justify-content-center">
        <div class="mt-4 mb-4">
            <h2 class="text-center mb-5">Организационная структура</h2>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    @livewire('posts', ['structure_id' => $structure_id])
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</div>
@endsection
