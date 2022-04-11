@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-evenly">

        <div class="col-md-8 px-0 ms-4">

            <h3 class="font-weight-bold mt-3">{{ $organization->org_name }}</h3>
            <p class="mt-4"><strong>Юридический адрес:</strong>
                {{ $organization->org_adress_legal_city }},
                {{ $organization->org_adress_legal_street }},
                {{ $organization->org_adress_legal_house }},
                корпус {{ $organization->org_adress_legal_corps ?? 'не указан' }},
                офис {{ $organization->org_adress_legal_office ?? 'не указан' }},
                {{ $organization->org_adress_legal_index }}
            </p>
            <p><strong>Почтовый адрес:</strong>
                {{ $organization->org_adress_post_city }},
                {{ $organization->org_adress_post_street }},
                {{ $organization->org_adress_post_house }},
                корпус {{ $organization->org_adress_post_corps ?? 'не указан' }},
                офис {{ $organization->org_adress_post_office ?? 'не указан' }},
                {{ $organization->org_adress_post_index }}
            </p>
            <p>
            <strong>Телефон:</strong> {{ $organization->org_phone }} <br>
            <strong>Факс:</strong> {{ $organization->org_fax ?? 'не указан' }} <br>
            <strong>Адрес электронной почты:</strong> {{ $organization->org_email }} <br>
            <strong>Сайт:</strong> {{ $organization->org_website ?? 'не указан' }} <br>
            <strong>Наименование банка:</strong> {{ $organization->org_directorate }} <br>
            <strong>Расчетный счет:</strong> {{ $organization->org_debit_account }} <br>
            <strong>Банковский идентификационный код (БИК):</strong> {{ $organization->org_bic }} <br>
            <strong>Учётный номер плательщика (УНП):</strong> {{ $organization->org_unp }} <br>
            <strong>Общий классификатор предприятий и организаций (ОКПО):</strong> {{ $organization->org_okpo ?? 'не указан' }}
            </p>

            @can ('update-organization', $organization)
                <div class="row justify-content-left">
                    <button class="p-3 m-3 btn btn-primary d-inline-block"><a href="/organizations/{{ $organization->id }}/edit" class="text-white">Редактировать</a></button>
                </div>

                <div class="row justify-content-left">
                    <button class="p-3 m-3 btn btn-primary d-inline-block"><a href='#' class="text-white">Создать штатное расписание</a></button>
                </div>
            @endcan

        </div>

    </div>
</div>
@endsection
