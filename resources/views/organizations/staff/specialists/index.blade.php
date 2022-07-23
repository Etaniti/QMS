@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-evenly flex-column">
        <div class="d-flex flex-row justify-content-between mt-4 mb-3">
            <h2>Должность {{ $specialist->specialist_name }}</h2>
            <a href="/organizations/{{ $specialist->organization_id }}/staff" class="row px-5 py-2 me-1 btn btn-outline-primary d-inline-block">К штатному расписанию</a>
        </div>

        <table class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center align-top" rowspan="3">
                        Наименование должности
                    </th>
                    <th class="text-center align-top" rowspan="3">
                        Количество штатных единиц
                    </th>
                    <th class="text-center align-top" rowspan="3">
                        Тарифный разряд по ЕТС
                    </th>
                    <th class="text-center align-top" rowspan="3">
                        Тарифный коэффициент по ЕТС
                    </th>
                    <th class="text-center align-top" rowspan="3">
                        Тарифная ставка (оклад)
                    </th>
                    <th class="text-center align-top" colspan="8">
                        Повышения, предусмотренные Положением об оплате труда,
                        в соответствии с Рекомендациями по определению тарифных
                        ставок (окладов) работников коммерческих организаций и о порядке
                        их повышения, утвержденными Постановлением Министерства труда
                        и социальной защиты Республики Беларусь от 11.07.2011 N 67
                    </th>
                    <th class="text-center align-top" rowspan="2" colspan="2">
                        Дополнительная мера
                        стимулирования труда
                        в соответствии с
                        Декретом Президента
                        Республики Беларусь
                        от 26.07.1999 N 29
                    </th>
                </tr>
                <tr>
                    <th class="text-center align-top" colspan="2">
                        за руководство направлением деятельности
                    </th>
                    <th class="text-center align-top" colspan="2">
                        за интенсивность работы
                    </th>
                    <th class="text-center align-top" colspan="2">
                        за категорию
                    </th>
                    <th class="text-center align-top" colspan="2">
                        за характер и специфику труда
                    </th>
                </tr>
                <tr>
                    <th class="text-center align-top">
                        процент
                    </th>
                    <th class="text-center align-top">
                        сумма
                    </th>
                    <th class="text-center align-top">
                        процент
                    </th>
                    <th class="text-center align-top">
                        сумма
                    </th>
                    <th class="text-center align-top">
                        процент
                    </th>
                    <th class="text-center align-top">
                        сумма
                    </th>
                    <th class="text-center align-top">
                        процент
                    </th>
                    <th class="text-center align-top">
                        сумма
                    </th>
                    <th class="text-center align-top">
                        процент
                    </th>
                    <th class="text-center align-top">
                        сумма
                    </th>
                </tr>
                <tr>
                    <td class="text-center">
                        1
                    </td>
                    <td class="text-center">
                        2
                    </td>
                    <td class="text-center">
                        3
                    </td>
                    <td class="text-center">
                        4
                    </td>
                    <td class="text-center">
                        5
                    </td>
                    <td class="text-center">
                        6
                    </td>
                    <td class="text-center">
                        7
                    </td>
                    <td class="text-center">
                        8
                    </td>
                    <td class="text-center">
                        9
                    </td>
                    <td class="text-center">
                        10
                    </td>
                    <td class="text-center">
                        11
                    </td>
                    <td class="text-center">
                        12
                    </td>
                    <td class="text-center">
                        13
                    </td>
                    <td class="text-center">
                        14
                    </td>
                    <td class="text-center">
                        15
                    </td>
                </tr>
            </thead>
            <tbody class="border-top-0">
                <tr>
                    <td class="text-center align-middle">{{ $specialist->specialist_name }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_count }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_tariff_category }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_tariff_coefficient }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_tariff_rate }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_management_perc ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_management_amount ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_intensity_perc ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_intensity_amount ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_category_perc ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_category_amount ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_specificity_perc ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_payrise_specificity_amount ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_additional_stimulation_perc ?? '-' }}</td>
                    <td class="text-center align-middle">{{ $specialist->specialist_additional_stimulation_amount ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
        @can('update-specialist', $specialist)
            <div class="row justify-content-center col-md-13 mt-5 mx-1">
                <a href="/staff/specialists/{{ $specialist->id }}/edit" class="mt-2 p-2 btn btn-primary d-inline-block">Редактировать</a>
                <a href="/staff/specialists/{{ $specialist->id }}/delete" class="mt-2 p-2 btn btn-outline-secondary d-inline-block">Удалить</a>
            </div>
        @endcan
        <div>
            <table class="table table-sm table-hover mt-5">
                <thead>
                  <tr>
                    <th>№</th>
                    <th class="text-center align-middle">Фамилия</th>
                    <th class="text-center align-middle">Имя</th>
                    <th class="text-center align-middle">Отчество</th>
                    <th class="text-center align-middle"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($specialist->employeeSpecialists as $employeeSpecialist)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="text-center align-middle">{{ $employeeSpecialist->employee_surname }}</td>
                            <td class="text-center align-middle">{{ $employeeSpecialist->employee_name }}</td>
                            <td class="text-center align-middle">{{ $employeeSpecialist->employee_patronymic }}</td>
                            <td class="text-center align-middle"><a href="/specialists/{{ $specialist->id }}/employees/{{ $employeeSpecialist->id }}" class="text-primary"><button type="button"class="btn btn-outline-primary">Показать</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @can('create-employeeSpecialist', $specialist)
            @if ($specialist->specialist_count > $specialist->employeeSpecialists->count())
                <div class="row justify-content-center col-md-13 mt-3 mb-5 mx-1">
                    <a href="/specialists/{{ $specialist->id }}/employees/create" class="p-2 btn btn-outline-primary d-inline-block">Добавить сотрудника</a>
                </div>
            @endif
        @endcan
        <div class="mt-5 mb-4"></div>
    </div>
</div>
@endsection
