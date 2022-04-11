@extends('layouts.app')

@section('content')
<div class="container">
    <div class="column justify-content-center mt-4">

        <div class="d-flex">

            <div class="col-md-8 px-0 ms-4">
                @foreach ($user->organizations as $organization)
                    <h3>{{ $organization->org_name }}</h3>
                    <p>Юридический адрес: {{ $organization->org_adress_legal_street }},
                        {{ $organization->org_adress_legal_house }},
                        {{ $organization->org_adress_legal_index }},
                        {{ $organization->org_adress_legal_city }},
                        <br>
                        тел: {{ $organization->org_phone ?? 'не указан' }},
                        факс: {{ $organization->org_fax ?? 'не указан' }},
                        <br>
                        эл. почта: {{ $organization->org_email }},
                        сайт: {{ $organization->org_website ?? 'не указан' }}.
                    </p>
                    <div class="row justify-content-left">
                        <button class="p-3 m-3 btn btn-primary d-inline-block"><a href="/organizations/{{ $organization->id }}" class="text-white">Подробнее</a></button>
                    </div>
                @endforeach

                <div class="col-8 mt-2">
                    @can('update', $user->profile)
                        <div class="top-right links">
                            <div class="row justify-content-left">
                                <button class="p-3 btn btn-primary d-inline-block"><a href="/organizations/create" class="text-white">Зарегистрировать новую организацию</a></button>
                            </div>
                        </div>
                    @endcan
                </div>

            </div>

            <div class="col-md-8 ">
                <div>
                    <h1>{{ $user->name }} {{ $user->surname }}</h1>
                    <p>{{ $user->profile->contact_phone ?? 'Контактный номер не указан.' }}</p>

                    @can('update', $user->profile)
                        <button class="p-3 mt-3 btn btn-primary d-inline-block">
                            <a href="/profile/{{ $user->id }}/edit" class="text-white">Редактировать профиль</a>
                        </button>
                    @endcan
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
