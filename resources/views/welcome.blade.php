@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <div class="content flex-end position-ref full-height flex-direction: column">
                <div class="col-md-12 ">
                    <div class="d-flex align-items-end flex-column">
                        @auth
                            <button class="p-3 mt-3 btn btn-primary d-inline-block align-self-lg-end">
                                <a href="profile/{{ auth()->user()->id }}" class="text-white">Профиль</a>
                            </button>
                        @endcan
                    </div>
                </div>

                <div class="title m-b-md display-3 text-muted" style="margin-top: 20%">
                    <p>Система Менеджмента Качества</p>
                </div>

            </div>
        </div>
    </div>
@endsection
