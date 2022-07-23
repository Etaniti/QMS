@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-evenly">

        <div class="col-md-8 offset-1">

            <h3 class="font-weight-bold mt-3">{{ $organization->organization_name }}</h3>
            <p class="mt-4"><strong>Юридический адрес:</strong>
                {{ $organization->organization_adress_legal_city }},
                {{ $organization->organization_adress_legal_street }},
                {{ $organization->organization_adress_legal_house }},
                корпус {{ $organization->organization_adress_legal_corps ?? 'не указан' }},
                офис {{ $organization->organization_adress_legal_office ?? 'не указан' }},
                {{ $organization->organization_adress_legal_index }}
            </p>
            <p><strong>Почтовый адрес:</strong>
                {{ $organization->organization_adress_post_city }},
                {{ $organization->organization_adress_post_street }},
                {{ $organization->organization_adress_post_house }},
                корпус {{ $organization->organization_adress_post_corps ?? 'не указан' }},
                офис {{ $organization->organization_adress_post_office ?? 'не указан' }},
                {{ $organization->organization_adress_post_index }}
            </p>
            <p>
                <strong>Телефон:</strong> {{ $organization->organization_phone }} <br>
                <strong>Факс:</strong> {{ $organization->organization_fax ?? 'не указан' }} <br>
                <strong>Адрес электронной почты:</strong> {{ $organization->organization_email }} <br>
                <strong>Сайт:</strong> {{ $organization->organization_website ?? 'не указан' }} <br>
                <strong>Наименование банка:</strong> {{ $organization->organization_directorate }} <br>
                <strong>Расчетный счет:</strong> {{ $organization->organization_debit_account }} <br>
                <strong>Банковский идентификационный код (БИК):</strong> {{ $organization->organization_bic }} <br>
                <strong>Учётный номер плательщика (УНП):</strong> {{ $organization->organization_unp }} <br>
                <strong>Общий классификатор предприятий и организаций (ОКПО):</strong> {{ $organization->organization_okpo ?? 'не указан' }}
            </p>
            <div class="d-flex flex-row justify-content-round">
                @can ('update-organization', $organization)
                    <a href="/organizations/{{ $organization->id }}/edit" class="btn btn-outline-primary p-3">Редактировать</a>
                @endcan
                <a href='/organizations/{{ $organization->id }}/staff' class="btn btn-primary p-3 mx-4">Штатное расписание</a>
                <a href='/organizations/{{ $organization->id }}/structure' class="btn btn-primary p-3">Организационная структура</a>
            </div>
        </div>
    </div>
</div>
@endsection
