@extends('layouts.app')

@section('content')
<div class="container overflow-hidden">
    <div class="column justify-content-center mt-4">

        <div class="d-flex flex-row justify-content-around">

            <div class="" style="margin-top: 3%">
                @foreach ($user->organizations as $organization)
                    <h3>{{ $organization->organization_name }}</h3>
                    <p>Юридический адрес: {{ $organization->organization_adress_legal_street }},
                        {{ $organization->organization_adress_legal_house }},
                        {{ $organization->organization_adress_legal_index }},
                        {{ $organization->organization_adress_legal_city }},
                        <br>
                        тел: {{ $organization->organization_phone ?? 'не указан' }},
                        факс: {{ $organization->organization_fax ?? 'не указан' }},
                        <br>
                        эл. почта: {{ $organization->organization_email }},
                        сайт: {{ $organization->organization_website ?? 'не указан' }}.
                    </p>
                    <div class="row justify-content-left col-md-6">
                        <a href="/organizations/{{ $organization->id }}" class="btn btn-outline-primary p-2 mx-2 mb-4 mt-3">Подробнее</a>
                    </div>
                @endforeach

                <div class="">
                    @can('update', $user->profile)
                        <div class="top-right links">
                            <div class="row justify-content-left">
                                <a href="/organizations/create" class="btn btn-primary p-3 mx-2">Зарегистрировать новую организацию</a>
                            </div>
                        </div>
                    @endcan
                </div>

            </div>

            <div style="margin-top: 3%">
                <div>
                    <h3>{{ $user->name }} {{ $user->surname }}</h3>
                    <p>{{ $user->profile->contact_phone ?? 'Контактный номер не указан.' }}</p>

                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit" class="btn btn-outline-primary p-2">Редактировать профиль</a>
                    @endcan
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
