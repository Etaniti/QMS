@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-evenly flex-column">
        <div class="d-flex flex-row justify-content-between mt-4 mb-4">
            <h2>Штатное расписание {{ $organization->organization_name }}</h2>
            <a href="{{ route('staffbook.index', $organization->staff->id) }}" class="row px-5 py-3 btn btn-outline-primary d-inline-block">Штатная книга</a>
        </div>
        <div>
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
                        <th class="text-center align-top" rowspan="3">
                            Окончательный размер тарифной ставки (оклада)
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
                        <td class="text-center">
                            16
                        </td>
                    </tr>
                </thead>

                <tbody class="border-top-0">
                    <tr>
                        <th class="align-top text-center" colspan="16">
                            Должности
                        </th>
                    </tr>
                    @foreach ($organization->specialists as $specialist)
                        <tr>
                            <td class="text-center align-middle">
                                <a href="/staff/specialists/{{ $specialist->id }}" class="btn btn-outline-light btn btn-outline-light text-dark border-0 border-0">{{ $specialist->specialist_name }}</a>
                            </td>
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
                            <td class="text-center align-middle">
                                {{ $specialist->specialist_tariff_rate
                                + $specialist->specialist_payrise_management_amount
                                + $specialist->specialist_payrise_intensity_amount
                                + $specialist->specialist_payrise_category_amount
                                + $specialist->specialist_payrise_specificity_amount
                                + $specialist->specialist_additional_stimulation_amount }}
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <th class="text-center align-middle">Итого</th>
                        <td class="text-center align-middle">
                            {{ $specialistsCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center">
                            {{ $specialistsRateCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="text-center align-middle">
                            {{ $specialistsFinalRateCount }}
                        </td>
                    </tr>

                    <tr>
                        <th class="align-top text-center" colspan="16">
                            Рабочие
                        </th>
                    </tr>
                    @foreach ($organization->workers as $worker)
                        <tr>
                            <td class="text-center align-middle">
                                <a href="/staff/workers/{{ $worker->id }}" class="btn btn-outline-light text-dark border-0">{{ $worker->worker_name }}</a>
                            </td>
                            <td class="text-center align-middle">{{ $worker->worker_count }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_tariff_category }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_tariff_coefficient }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_tariff_rate }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_management_perc ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_management_amount ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_intensity_perc ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_intensity_amount ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_category_perc ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_category_amount ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_specificity_perc ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_payrise_specificity_amount ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_additional_stimulation_perc ?? '-' }}</td>
                            <td class="text-center align-middle">{{ $worker->worker_additional_stimulation_amount ?? '-' }}</td>
                            <td class="text-center align-middle">
                                {{ $worker->worker_tariff_rate
                                + $worker->worker_payrise_management_amount
                                + $worker->worker_payrise_intensity_amount
                                + $worker->worker_payrise_category_amount
                                + $worker->worker_payrise_specificity_amount
                                + $worker->worker_additional_stimulation_amount }}
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th class="text-center align-middle">Итого</th>
                        <td class="text-center align-middle">
                            {{ $workersCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center">
                            {{ $workersRateCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="text-center align-middle">
                            {{ $workersFinalRateCount }}
                        </td>
                    </tr>

                    <tr>
                        <th class="align-middle text-center">Итого по организации</th>
                        <td class="align-middle text-center">
                            {{ $specialistsCount + $workersCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center">
                            {{ $specialistsRateCount + $workersRateCount }}
                        </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center text-black-50"> x </td>
                        <td class="align-middle text-center">
                            {{ $specialistsFinalRateCount + $workersFinalRateCount }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @can('create-specialist', $organization)
        <div class="d-flex justify-content-evenly">
            <div class="col-md-10">
                    <div class="row justify-content-left">
                        <a href="/staff/{{ $organization->id }}/specialists/create" class="p-3 m-3 btn btn-primary d-inline-block">Добавить должность</a>
                        <a href="/staff/{{ $organization->id }}/workers/create" class="p-3 m-3 btn btn-primary d-inline-block">Добавить рабочую специальность</a>
                    </div>
            </div>
        </div>
    @endcan
</div>
@endsection
