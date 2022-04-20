@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/staff/{{ $organization->id }}/workers" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row pt-4">
                    <h1>Добавление рабочей специальности в штатное расписание</h1>
                </div>

                <div class="form-group row pt-4">
                    <label for="workers_name" class="col-md-4 col-form-label font-weight-bold">Наименование рабочей специальности</label>

                    <input id="workers_name"
                    type="text"
                    class="form-control @error('workers_name') is-invalid @enderror"
                    name="workers_name"
                    value="{{ old('workers_name') }}"
                    autocomplete="workers_name" autofocus>

                    @error('workers_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Наименование должности-->
                </div>

                <div class="form-group row pt-4">
                    <label for="workers_count" class="col-md-4 col-form-label font-weight-bold">Количество штатных единиц</label>

                    <input id="workers_count"
                    type="text"
                    class="form-control @error('workers_count') is-invalid @enderror"
                    name="workers_count"
                    value="{{ old('workers_count') }}"
                    autocomplete="workers_count" autofocus>

                    @error('workers_count')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Количество штатных единиц-->
                </div>

                <div class="form-group row pt-4">
                    <label for="workers_tariff_category" class="col-md-4 col-form-label font-weight-bold">Тарифный разряд по ЕТС</label>

                    <input id="workers_tariff_category"
                    type="text"
                    class="form-control @error('workers_tariff_category') is-invalid @enderror"
                    name="workers_tariff_category"
                    value="{{ old('workers_tariff_category') }}"
                    autocomplete="workers_tariff_category" autofocus>

                    @error('workers_tariff_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Тарифный разряд по ЕТС-->
                </div>


                <div class="form-group row pt-4">
                    <label for="workers_tariff_coefficient" class="col-md-4 col-form-label font-weight-bold">Тарифный коэффициент по ЕТС</label>

                    <input id="workers_tariff_coefficient"
                    type="text"
                    class="form-control @error('workers_tariff_coefficient') is-invalid @enderror"
                    name="workers_tariff_coefficient"
                    value="{{ old('workers_tariff_coefficient') }}"
                    autocomplete="workers_tariff_coefficient" autofocus>

                    @error('workers_tariff_coefficient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Тарифный коэффициент по ЕТС-->
                </div>

                <div class="form-group row pt-4">
                    <label for="workers_tariff_rate" class="col-md-4 col-form-label font-weight-bold">Тарифная ставка (оклад)</label>

                    <input id="workers_tariff_rate"
                    type="text"
                    class="form-control @error('workers_tariff_rate') is-invalid @enderror"
                    name="workers_tariff_rate"
                    value="{{ old('workers_tariff_rate') }}"
                    autocomplete="workers_tariff_rate" autofocus>

                    @error('workers_tariff_rate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Тарифная ставка (оклад)-->
                </div>

                <div class="form-group row">
                    <h3 class="col-md-8 col-form-label font-weight-bold">
                        Повышения, предусмотренные Положением об оплате труда,
                        в соответствии с Рекомендациями по определению тарифных
                        ставок (окладов) работников коммерческих организаций и о порядке
                        их повышения, утвержденными Постановлением Министерства труда
                        и социальной защиты Республики Беларусь от 11.07.2011 N 67
                    </h3>
                    <!--Повышения-->
                </div>

                <div class="form-group row d-flex-row justify-content-between align-items-center flex-nowrap">
                    <h3 class="col-md-4 col-form-label font-weight-bold">за руководство направлением деятельности</h3>

                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_management_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="workers_payrise_management_perc"
                        type="text"
                        class="form-control @error('workers_payrise_management_perc') is-invalid @enderror"
                        name="workers_payrise_management_perc"
                        value="{{ old('workers_payrise_management_perc') }}"
                        autocomplete="workers_payrise_management_perc" autofocus>

                        @error('workers_payrise_management_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="ml-8 mr-4">

                        <label for="workers_payrise_management_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="workers_payrise_management_amount"
                        type="text"
                        class="form-control @error('workers_payrise_management_amount') is-invalid @enderror"
                        name="workers_payrise_management_amount"
                        value="{{ old('workers_payrise_management_amount') }}"
                        autocomplete="workers_payrise_management_amount" autofocus>

                        @error('workers_payrise_management_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <!--за руководство направлением деятельности-->

                </div>

                <div class="form-group row d-flex-row justify-content-between align-items-center flex-nowrap">
                    <h3 class="col-md-4 col-form-label font-weight-bold">за интенсивность работы</h3>

                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_intensity_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="workers_payrise_intensity_perc"
                        type="text"
                        class="form-control @error('workers_payrise_intensity_perc') is-invalid @enderror"
                        name="workers_payrise_intensity_perc"
                        value="{{ old('workers_payrise_intensity_perc') }}"
                        autocomplete="workers_payrise_intensity_perc" autofocus>

                        @error('workers_payrise_intensity_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_intensity_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="workers_payrise_intensity_amount"
                        type="text"
                        class="form-control @error('workers_payrise_intensity_amount') is-invalid @enderror"
                        name="workers_payrise_intensity_amount"
                        value="{{ old('workers_payrise_intensity_amount') }}"
                        autocomplete="workers_payrise_intensity_amount" autofocus>

                        @error('workers_payrise_intensity_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--за интенсивность работы-->
                    </div>
                </div>

                <div class="form-group row d-flex-row justify-content-between align-items-center flex-nowrap">
                    <h3 class="col-md-4 col-form-label font-weight-bold">за категорию</h3>

                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_category_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="workers_payrise_category_perc"
                        type="text"
                        class="form-control @error('workers_payrise_category_perc') is-invalid @enderror"
                        name="workers_payrise_category_perc"
                        value="{{ old('workers_payrise_category_perc') }}"
                        autocomplete="workers_payrise_category_perc" autofocus>

                        @error('workers_payrise_category_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_category_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="workers_payrise_category_amount"
                        type="text"
                        class="form-control @error('workers_payrise_category_amount') is-invalid @enderror"
                        name="workers_payrise_category_amount"
                        value="{{ old('workers_payrise_category_amount') }}"
                        autocomplete="workers_payrise_category_amount" autofocus>

                        @error('workers_payrise_category_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--за категорию-->
                    </div>
                </div>

                <div class="form-group row d-flex-row justify-content-between align-items-center flex-nowrap">
                    <h3 class="col-md-4 col-form-label font-weight-bold">за характер и специфику труда</h3>

                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_specificity_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="workers_payrise_specificity_perc"
                        type="text"
                        class="form-control @error('workers_payrise_specificity_perc') is-invalid @enderror"
                        name="workers_payrise_specificity_perc"
                        value="{{ old('workers_payrise_specificity_perc') }}"
                        autocomplete="workers_payrise_specificity_perc" autofocus>

                        @error('workers_payrise_specificity_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="workers_payrise_specificity_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="workers_payrise_specificity_amount"
                        type="text"
                        class="form-control @error('workers_payrise_specificity_amount') is-invalid @enderror"
                        name="workers_payrise_specificity_amount"
                        value="{{ old('workers_payrise_specificity_amount') }}"
                        autocomplete="workers_payrise_specificity_amount" autofocus>

                        @error('workers_payrise_specificity_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--за характер и специфику труда-->
                    </div>
                </div>

                <div class="form-group row d-flex-row justify-content-between align-items-center flex-nowrap">
                    <h3 class="col-md-4 col-form-label font-weight-bold">
                        Дополнительная мера
                        стимулирования труда
                        в соответствии с
                        Декретом Президента
                        Республики Беларусь
                        от 26.07.1999 N 29
                    </h3>

                    <div class="ml-6 mr-4">
                        <label for="workers_additional_stimulation_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="workers_additional_stimulation_perc"
                        type="text"
                        class="form-control @error('workers_additional_stimulation_perc') is-invalid @enderror"
                        name="workers_additional_stimulation_perc"
                        value="{{ old('workers_additional_stimulation_perc') }}"
                        autocomplete="workers_additional_stimulation_perc" autofocus>

                        @error('workers_additional_stimulation_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="workers_additional_stimulation_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="workers_additional_stimulation_amount"
                        type="text"
                        class="form-control @error('workers_additional_stimulation_amount') is-invalid @enderror"
                        name="workers_additional_stimulation_amount"
                        value="{{ old('workers_additional_stimulation_amount') }}"
                        autocomplete="workers_additional_stimulation_amount" autofocus>

                        @error('workers_additional_stimulation_amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!--Дополнительная мера-->
                    </div>
                </div>

                <div class="row pt-4 ml-1 mb-5">
                    <button class="p-3 mt-3 btn btn-primary d-inline-block">Добавить должность</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
