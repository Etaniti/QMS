@extends('layouts.app')

@section('content')
<div class="container mx-1 mb-3">

    <div class="d-flex flex-column">
        <div class="d-flex flex-row justify-content-between mt-4 mb-4">
            <h2 class="ms-5 ps-4">Штатная книга {{ $organization->organization_name }}</h2>
            <a href="/organizations/{{ $organization->id }}/staff" class="row px-5 py-2 btn btn-outline-primary d-inline-block">К штатному расписанию</a>
        </div>
        <div>
            <table class="table table-sm table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center align-top text-small px-4" rowspan="3">
                            Дата приема на работу
                        </th>
                        <th class="text-center align-top text-small px-5" rowspan="3">
                            Ф.И.О.
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Наименование должности
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Количество штатных единиц
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Тарифный разряд по ЕТС
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Тарифный коэффициент по ЕТС
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Тарифная ставка (оклад) по ЕТС, с учетом фактического
                            количества штатной единицы
                        </th>
                        <th class="text-center align-top text-small" colspan="8">
                            Повышения, предусмотренные Положением об оплате труда,
                            в соответствии с Рекомендациями по определению тарифных
                            ставок (окладов) работников коммерческих организаций и о порядке
                            их повышения, утвержденными Постановлением Министерства труда
                            и социальной защиты Республики Беларусь от 11.07.2011 N 67
                        </th>
                        <th class="text-center align-top text-small" rowspan="2" colspan="2">
                            Дополнительная мера
                            стимулирования труда
                            в соответствии с
                            Декретом Президента
                            Республики Беларусь
                            от 26.07.1999 N 29
                        </th>
                        <th class="text-center align-top text-small" rowspan="3">
                            Окончательный размер тарифной ставки (оклада)
                        </th>

                    </tr>
                    <tr>
                        <th class="text-center align-top text-small" colspan="2">
                            за руководство направлением деятельности
                        </th>
                        <th class="text-center align-top text-small" colspan="2">
                            за интенсивность работы
                        </th>
                        <th class="text-center align-top text-small" colspan="2">
                            за категорию
                        </th>
                        <th class="text-center align-top text-small" colspan="2">
                            за характер и специфику труда
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center align-top text-small">
                            процент
                        </th>
                        <th class="text-center align-top text-small">
                            сумма
                        </th>
                        <th class="text-center align-top text-small">
                            процент
                        </th>
                        <th class="text-center align-top text-small">
                            сумма
                        </th>
                        <th class="text-center align-top text-small">
                            процент
                        </th>
                        <th class="text-center align-top text-small">
                            сумма
                        </th>
                        <th class="text-center align-top text-small">
                            процент
                        </th>
                        <th class="text-center align-top text-small">
                            сумма
                        </th>
                        <th class="text-center align-top text-small">
                            процент
                        </th>
                        <th class="text-center align-top text-small">
                            сумма
                        </th>
                    </tr>
                    <tr>
                        <td class="text-center text-small">
                            1
                        </td>
                        <td class="text-center text-small">
                            2
                        </td>
                        <td class="text-center text-small">
                            3
                        </td>
                        <td class="text-center text-small">
                            4
                        </td>
                        <td class="text-center text-small">
                            5
                        </td>
                        <td class="text-center text-small">
                            6
                        </td>
                        <td class="text-center text-small">
                            7
                        </td>
                        <td class="text-center text-small">
                            8
                        </td>
                        <td class="text-center text-small">
                            9
                        </td>
                        <td class="text-center text-small">
                            10
                        </td>
                        <td class="text-center text-small">
                            11
                        </td>
                        <td class="text-center text-small">
                            12
                        </td>
                        <td class="text-center text-small">
                            13
                        </td>
                        <td class="text-center text-small">
                            14
                        </td>
                        <td class="text-center text-small">
                            15
                        </td>
                        <td class="text-center text-small">
                            18
                        </td>
                        <td class="text-center text-small">
                            17
                        </td>
                        <td class="text-center text-small">
                            18
                        </td>
                    </tr>
                </thead>

                <tbody class="border-top-0">
                    <tr>
                        <th class="align-top text-center text-small" colspan="18">
                            Должности
                        </th>
                    </tr>
                    @foreach ($organization->specialists as $specialist)
                        @foreach ($specialist->employeeSpecialists as $employeeSpecialist)
                        <tr>
                            <td class="text-center text-small align-middle">{{ date('d-m-Y', strtotime($employeeSpecialist->employee_hiring_date)) }}</td>
                            <td class="text-center text-small align-middle">
                                <a href="/specialists/{{ $specialist->id }}/employees/{{ $employeeSpecialist->id }}" class="btn btn-outline-light text-dark text-small border-0">
                                    {{ $employeeSpecialist->employee_surname }} {{ substr($employeeSpecialist->employee_name, 0, 2) }}. {{ substr($employeeSpecialist->employee_patronymic, 0, 2) }}.
                                </a>
                            </td>
                            <td class="text-center text-small align-middle">
                                <a href="/staff/specialists/{{ $specialist->id }}" class="btn btn-outline-light text-dark text-small border-0">{{ $specialist->specialist_name }}</a>
                            </td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_count }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_tariff_category }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_tariff_coefficient }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_tariff_rate }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_management_perc ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_management_amount ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_intensity_perc ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_intensity_amount ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_category_perc ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_category_amount ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_specificity_perc ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_payrise_specificity_amount ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_additional_stimulation_perc ?? '-' }}</td>
                            <td class="text-center text-small align-middle">{{ $employeeSpecialist->specialist->specialist_additional_stimulation_amount ?? '-' }}</td>
                            <td class="text-center text-small align-middle">
                                {{ $employeeSpecialist->specialist->specialist_tariff_rate
                                + $employeeSpecialist->specialist->specialist_payrise_management_amount
                                + $employeeSpecialist->specialist->specialist_payrise_intensity_amount
                                + $employeeSpecialist->specialist->specialist_payrise_category_amount
                                + $employeeSpecialist->specialist->specialist_payrise_specificity_amount
                                + $employeeSpecialist->specialist->specialist_additional_stimulation_amount }}
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                    <th class="text-center text-small align-middle" colspan="2">Итого</th>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="text-center text-small align-middle">
                        {{ $specialistsCount }}
                    </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small">
                        {{ $specialistsRateCount }}
                    </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="align-middle text-center text-small text-black-50"> x </td>
                    <td class="text-center text-small align-middle">
                        {{ $specialistsFinalRateCount }}
                    </td>

                    <tr>
                        <th class="align-top text-small text-center text-small" colspan="18">
                            Рабочие
                        </th>
                    </tr>
                    @foreach ($organization->workers as $worker)
                        @foreach ($worker->employeeWorkers as $employeeWorker)
                            <tr>
                                <td class="text-center text-small align-middle">{{ date('d-m-Y', strtotime($employeeWorker->employee_hiring_date)) }}</td>
                                <td class="text-center text-small align-middle">
                                    <a href="/workers/{{ $worker->id }}/employees/{{ $employeeWorker->id }}" class="btn btn-outline-light text-dark text-small border-0">
                                        {{ $employeeWorker->employee_surname }} {{ substr($employeeWorker->employee_name, 0, 2) }}. {{ substr($employeeWorker->employee_patronymic, 0, 2) }}.
                                    </a>
                                </td>
                                <td class="text-center text-small align-middle">
                                    <a href="/staff/workers/{{ $employeeWorker->worker->id }}" class="btn btn-outline-light btn btn-outline-light text-dark border-0 border-0 text-small">{{ $employeeWorker->worker->worker_name }}</a>
                                </td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_count }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_tariff_category }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_tariff_coefficient }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_tariff_rate }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_management_perc ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_management_amount ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_intensity_perc ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_intensity_amount ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_category_perc ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_category_amount ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_specificity_perc ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_payrise_specificity_amount ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_additional_stimulation_perc ?? '-' }}</td>
                                <td class="text-center text-small align-middle">{{ $employeeWorker->worker->worker_additional_stimulation_amount ?? '-' }}</td>
                                <td class="text-center text-small align-middle">
                                    {{ $employeeWorker->worker->worker_tariff_rate
                                    + $employeeWorker->worker->worker_payrise_management_amount
                                    + $employeeWorker->worker->worker_payrise_intensity_amount
                                    + $employeeWorker->worker->worker_payrise_category_amount
                                    + $employeeWorker->worker->worker_payrise_specificity_amount
                                    + $employeeWorker->worker->worker_additional_stimulation_amount }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                        <tr class="border-top-0">
                            <th class="text-center text-small align-middle" colspan="2">Итого</th>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="text-center text-small align-middle">
                                {{ $workersCount }}
                            </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small">
                                {{ $workersRateCount }}
                            </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="text-center text-small align-middle">
                                {{ $workersFinalRateCount }}
                            </td>
                        </tr>

                        <tr>
                            <th class="align-middle text-center text-small" colspan="2">Итого по организации</th>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small">
                                {{ $specialistsCount + $workersCount }}
                            </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small">
                                {{ $specialistsRateCount + $workersRateCount }}
                            </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small text-black-50"> x </td>
                            <td class="align-middle text-center text-small">
                                {{ $specialistsFinalRateCount + $workersFinalRateCount }}
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
@endsection
