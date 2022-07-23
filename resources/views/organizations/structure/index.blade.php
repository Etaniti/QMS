@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex flex-column">
        <div class="mt-4 mb-4">
            <h2 class="text-center mb-5">Организационная структура {{ $organization->organization_name }}</h2>

            @foreach ($organization->structure->modules as $module)
                <div class="d-flex flex-row justify-content-center">
                    <div id="post_3">
                        <button type="button" name="add" class="px-3 btn btn-sm btn-outline-primary rounded-pill">
                            <span class="fs-4">+</span>
                        </button>
                        <svg class="align-self-center" width="70" height="3" viewBox="0 0 70 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="70" y2="0.5" stroke="black" stroke-opacity="0.3"/>
                        </svg>
                    </div>
                    <div class="card border-dark col-2">
                        <p class="h5 text-center align-middle pt-3 pb-2">{{ $module->post_1 }}</p>
                    </div>
                    <div id="post_2">
                        <svg class="align-self-center" width="70" height="3" viewBox="0 0 70 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="0.5" x2="70" y2="0.5" stroke="black" stroke-opacity="0.3"/>
                        </svg>
                        <button type="button" name="add" class="px-3 btn btn-sm btn-outline-primary rounded-pill">
                            <span class="fs-4">+</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center">
                    <svg class="align-self-center" width="2" height="80" viewBox="0 0 2 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="100.09" x2="1" y2="0.0898438" stroke="black" stroke-opacity="0.6" stroke-width="2"/>
                    </svg>
                </div>
            @endforeach

            <div class="row justify-content-center">
                <div>
                    @livewire('modules', ['structure_id' => $organization->structure->id])
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    @livewireScripts
</div>
@endsection
