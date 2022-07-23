@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/staff/workers" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-10 offset-2">

                <div class="row pt-4">
                    <h2>Добавление рабочей специальности в штатное расписание</h2>
                </div>

                <div class="col-6 offset-2">
                    <div class="form-group row pt-4">
                        <input type="text" name="organization_id" value="{{$organization_id}}" hidden />
                        <label for="worker_name" class="col-form-label fw-bold">Наименование рабочей специальности</label>

                        <input id="worker_name"
                        type="text"
                        class="form-control @error('worker_name') is-invalid @enderror"
                        name="worker_name"
                        value="{{ old('worker_name') }}"
                        autocomplete="worker_name" autofocus>

                        @error('worker_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Наименование рабочей специальности-->
                    </div>

                    <div class="form-group row pt-4">
                        <label for="worker_count" class="col-form-label fw-bold">Количество штатных единиц</label>

                        <input id="worker_count"
                        type="text"
                        class="form-control @error('worker_count') is-invalid @enderror"
                        name="worker_count"
                        value="{{ old('worker_count') }}"
                        autocomplete="worker_count" autofocus>

                        @error('worker_count')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Количество штатных единиц-->
                    </div>

                    <div class="form-group row pt-4">
                        <label for="worker_tariff_category" class="col-form-label fw-bold">Тарифный разряд по ЕТС</label>

                        <input id="worker_tariff_category"
                        type="text"
                        class="form-control @error('worker_tariff_category') is-invalid @enderror"
                        name="worker_tariff_category"
                        value="{{ old('worker_tariff_category') }}"
                        autocomplete="worker_tariff_category" autofocus>

                        @error('worker_tariff_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Тарифный разряд по ЕТС-->
                    </div>


                    <div class="form-group row pt-4">
                        <label for="worker_tariff_coefficient" class="col-form-label fw-bold">Тарифный коэффициент по ЕТС</label>

                        <input id="worker_tariff_coefficient"
                        type="text"
                        class="form-control @error('worker_tariff_coefficient') is-invalid @enderror"
                        name="worker_tariff_coefficient"
                        value="{{ old('worker_tariff_coefficient') }}"
                        autocomplete="worker_tariff_coefficient" autofocus>

                        @error('worker_tariff_coefficient')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Тарифный коэффициент по ЕТС-->
                    </div>

                    <div class="form-group row pt-4">
                        <label for="worker_tariff_rate" class="col-form-label fw-bold">Тарифная ставка (оклад)</label>

                        <input id="worker_tariff_rate"
                        type="text"
                        class="form-control @error('worker_tariff_rate') is-invalid @enderror"
                        name="worker_tariff_rate"
                        value="{{ old('worker_tariff_rate') }}"
                        autocomplete="worker_tariff_rate" autofocus>

                        @error('worker_tariff_rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Тарифная ставка (оклад)-->
                    </div>

                    <div class="form-group row">
                        <h3 class="col-md-12 col-form-label fw-bold mt-4">
                            Повышения, предусмотренные Положением об оплате труда,
                            в соответствии с Рекомендациями по определению тарифных
                            ставок (окладов) работников коммерческих организаций и о порядке
                            их повышения, утвержденными Постановлением Министерства труда
                            и социальной защиты Республики Беларусь от 11.07.2011 N 67
                        </h3>
                        <!--Повышения-->
                    </div>

                    <div class="form-group">
                        <h3 class="col-form-label fw-bold">за руководство направлением деятельности</h3>

                        <div class="d-flex flex-row">
                            <div>
                                <label for="worker_payrise_management_perc" class="col-md-2 col-form-label">процент</label>

                                <input id="worker_payrise_management_perc"
                                type="text"
                                class="form-control @error('worker_payrise_management_perc') is-invalid @enderror"
                                name="worker_payrise_management_perc"
                                value="{{ old('worker_payrise_management_perc') }}"
                                autocomplete="worker_payrise_management_perc" autofocus>

                                @error('worker_payrise_management_perc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mx-3">
                                <label for="worker_payrise_management_amount" class="col-md-2 col-form-label">сумма</label>

                                <input id="worker_payrise_management_amount"
                                type="text"
                                class="form-control @error('worker_payrise_management_amount') is-invalid @enderror"
                                name="worker_payrise_management_amount"
                                value="{{ old('worker_payrise_management_amount') }}"
                                autocomplete="worker_payrise_management_amount" autofocus>

                                @error('worker_payrise_management_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--за руководство направлением деятельности-->
                        </div>
                    </div>

                    <div class="form-group">
                        <h3 class="col-form-label fw-bold mt-4">за интенсивность работы</h3>

                        <div class="d-flex flex-row">
                            <div>
                                <label for="worker_payrise_intensity_perc" class="col-md-2 col-form-label">процент</label>

                                <input id="worker_payrise_intensity_perc"
                                type="text"
                                class="form-control @error('worker_payrise_intensity_perc') is-invalid @enderror"
                                name="worker_payrise_intensity_perc"
                                value="{{ old('worker_payrise_intensity_perc') }}"
                                autocomplete="worker_payrise_intensity_perc" autofocus>

                                @error('worker_payrise_intensity_perc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mx-3">
                                <label for="worker_payrise_intensity_amount" class="col-md-2 col-form-label">сумма</label>

                                <input id="worker_payrise_intensity_amount"
                                type="text"
                                class="form-control @error('worker_payrise_intensity_amount') is-invalid @enderror"
                                name="worker_payrise_intensity_amount"
                                value="{{ old('worker_payrise_intensity_amount') }}"
                                autocomplete="worker_payrise_intensity_amount" autofocus>

                                @error('worker_payrise_intensity_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--за интенсивность работы-->
                        </div>
                    </div>

                    <div class="form-group">
                        <h3 class="col-form-label fw-bold mt-4">за категорию</h3>

                        <div class="d-flex flex-row">
                            <div>
                                <label for="worker_payrise_category_perc" class="col-md-2 col-form-label">процент</label>

                                <input id="worker_payrise_category_perc"
                                type="text"
                                class="form-control @error('worker_payrise_category_perc') is-invalid @enderror"
                                name="worker_payrise_category_perc"
                                value="{{ old('worker_payrise_category_perc') }}"
                                autocomplete="worker_payrise_category_perc" autofocus>

                                @error('worker_payrise_category_perc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mx-3">
                                <label for="worker_payrise_category_amount" class="col-md-2 col-form-label">сумма</label>

                                <input id="worker_payrise_category_amount"
                                type="text"
                                class="form-control @error('worker_payrise_category_amount') is-invalid @enderror"
                                name="worker_payrise_category_amount"
                                value="{{ old('worker_payrise_category_amount') }}"
                                autocomplete="worker_payrise_category_amount" autofocus>

                                @error('worker_payrise_category_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!--за категорию-->
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <h3 class="col-form-label fw-bold mt-4">за характер и специфику труда</h3>

                        <div class="d-flex flex-row">
                            <div>
                                <label for="worker_payrise_specificity_perc" class="col-md-2 col-form-label">процент</label>

                                <input id="worker_payrise_specificity_perc"
                                type="text"
                                class="form-control @error('worker_payrise_specificity_perc') is-invalid @enderror"
                                name="worker_payrise_specificity_perc"
                                value="{{ old('worker_payrise_specificity_perc') }}"
                                autocomplete="worker_payrise_specificity_perc" autofocus>

                                @error('worker_payrise_specificity_perc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mx-3">
                                <label for="worker_payrise_specificity_amount" class="col-md-2 col-form-label">сумма</label>

                                <input id="worker_payrise_specificity_amount"
                                type="text"
                                class="form-control @error('worker_payrise_specificity_amount') is-invalid @enderror"
                                name="worker_payrise_specificity_amount"
                                value="{{ old('worker_payrise_specificity_amount') }}"
                                autocomplete="worker_payrise_specificity_amount" autofocus>

                                @error('worker_payrise_specificity_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!--за характер и специфику труда-->
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <h3 class="col-form-label fw-bold">
                            Дополнительная мера
                            стимулирования труда
                            в соответствии с
                            Декретом Президента
                            Республики Беларусь
                            от 26.07.1999 N 29
                        </h3>

                        <div class="d-flex flex-row">
                            <div>
                                <label for="worker_additional_stimulation_perc" class="col-md-2 col-form-label">процент</label>

                                <input id="worker_additional_stimulation_perc"
                                type="text"
                                class="form-control @error('worker_additional_stimulation_perc') is-invalid @enderror"
                                name="worker_additional_stimulation_perc"
                                value="{{ old('worker_additional_stimulation_perc') }}"
                                autocomplete="worker_additional_stimulation_perc" autofocus>

                                @error('worker_additional_stimulation_perc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mx-3">
                                <label for="worker_additional_stimulation_amount" class="col-md-2 col-form-label">сумма</label>

                                <input id="worker_additional_stimulation_amount"
                                type="text"
                                class="form-control @error('worker_additional_stimulation_amount') is-invalid @enderror"
                                name="worker_additional_stimulation_amount"
                                value="{{ old('worker_additional_stimulation_amount') }}"
                                autocomplete="worker_additional_stimulation_amount" autofocus>

                                @error('worker_additional_stimulation_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <!--Дополнительная мера-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-md-6 offset-2 pt-4 mt-3 mb-5">
                    <button class="p-3 mt-3 btn btn-primary d-inline-block">Добавить рабочую специальность</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
