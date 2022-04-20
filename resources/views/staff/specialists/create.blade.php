@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/staff/specialists" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row pt-4">
                    <h1>Добавление должности в штатное расписание</h1>
                </div>

                <div class="form-group row pt-4">
                    <label for="specialists_name" class="col-md-4 col-form-label font-weight-bold">Наименование должности</label>

                    <input id="specialists_name"
                    type="text"
                    class="form-control @error('specialists_name') is-invalid @enderror"
                    name="specialists_name"
                    value="{{ old('specialists_name') }}"
                    autocomplete="specialists_name" autofocus>

                    @error('specialists_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Наименование должности-->
                </div>

                <div class="form-group row pt-4">
                    <label for="specialists_count" class="col-md-4 col-form-label font-weight-bold">Количество штатных единиц</label>

                    <input id="specialists_count"
                    type="text"
                    class="form-control @error('specialists_count') is-invalid @enderror"
                    name="specialists_count"
                    value="{{ old('specialists_count') }}"
                    autocomplete="specialists_count" autofocus>

                    @error('specialists_count')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Количество штатных единиц-->
                </div>

                <div class="form-group row pt-4">
                    <label for="specialists_tariff_category" class="col-md-4 col-form-label font-weight-bold">Тарифный разряд по ЕТС</label>

                    <input id="specialists_tariff_category"
                    type="text"
                    class="form-control @error('specialists_tariff_category') is-invalid @enderror"
                    name="specialists_tariff_category"
                    value="{{ old('specialists_tariff_category') }}"
                    autocomplete="specialists_tariff_category" autofocus>

                    @error('specialists_tariff_category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Тарифный разряд по ЕТС-->
                </div>


                <div class="form-group row pt-4">
                    <label for="specialists_tariff_coefficient" class="col-md-4 col-form-label font-weight-bold">Тарифный коэффициент по ЕТС</label>

                    <input id="specialists_tariff_coefficient"
                    type="text"
                    class="form-control @error('specialists_tariff_coefficient') is-invalid @enderror"
                    name="specialists_tariff_coefficient"
                    value="{{ old('specialists_tariff_coefficient') }}"
                    autocomplete="specialists_tariff_coefficient" autofocus>

                    @error('specialists_tariff_coefficient')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Тарифный коэффициент по ЕТС-->
                </div>

                <div class="form-group row pt-4">
                    <label for="specialists_tariff_rate" class="col-md-4 col-form-label font-weight-bold">Тарифная ставка (оклад)</label>

                    <input id="specialists_tariff_rate"
                    type="text"
                    class="form-control @error('specialists_tariff_rate') is-invalid @enderror"
                    name="specialists_tariff_rate"
                    value="{{ old('specialists_tariff_rate') }}"
                    autocomplete="specialists_tariff_rate" autofocus>

                    @error('specialists_tariff_rate')
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
                        <label for="specialists_payrise_management_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="specialists_payrise_management_perc"
                        type="text"
                        class="form-control @error('specialists_payrise_management_perc') is-invalid @enderror"
                        name="specialists_payrise_management_perc"
                        value="{{ old('specialists_payrise_management_perc') }}"
                        autocomplete="specialists_payrise_management_perc" autofocus>

                        @error('specialists_payrise_management_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="ml-8 mr-4">

                        <label for="specialists_payrise_management_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="specialists_payrise_management_amount"
                        type="text"
                        class="form-control @error('specialists_payrise_management_amount') is-invalid @enderror"
                        name="specialists_payrise_management_amount"
                        value="{{ old('specialists_payrise_management_amount') }}"
                        autocomplete="specialists_payrise_management_amount" autofocus>

                        @error('specialists_payrise_management_amount')
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
                        <label for="specialists_payrise_intensity_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="specialists_payrise_intensity_perc"
                        type="text"
                        class="form-control @error('specialists_payrise_intensity_perc') is-invalid @enderror"
                        name="specialists_payrise_intensity_perc"
                        value="{{ old('specialists_payrise_intensity_perc') }}"
                        autocomplete="specialists_payrise_intensity_perc" autofocus>

                        @error('specialists_payrise_intensity_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="specialists_payrise_intensity_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="specialists_payrise_intensity_amount"
                        type="text"
                        class="form-control @error('specialists_payrise_intensity_amount') is-invalid @enderror"
                        name="specialists_payrise_intensity_amount"
                        value="{{ old('specialists_payrise_intensity_amount') }}"
                        autocomplete="specialists_payrise_intensity_amount" autofocus>

                        @error('specialists_payrise_intensity_amount')
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
                        <label for="specialists_payrise_category_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="specialists_payrise_category_perc"
                        type="text"
                        class="form-control @error('specialists_payrise_category_perc') is-invalid @enderror"
                        name="specialists_payrise_category_perc"
                        value="{{ old('specialists_payrise_category_perc') }}"
                        autocomplete="specialists_payrise_category_perc" autofocus>

                        @error('specialists_payrise_category_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="specialists_payrise_category_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="specialists_payrise_category_amount"
                        type="text"
                        class="form-control @error('specialists_payrise_category_amount') is-invalid @enderror"
                        name="specialists_payrise_category_amount"
                        value="{{ old('specialists_payrise_category_amount') }}"
                        autocomplete="specialists_payrise_category_amount" autofocus>

                        @error('specialists_payrise_category_amount')
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
                        <label for="specialists_payrise_specificity_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="specialists_payrise_specificity_perc"
                        type="text"
                        class="form-control @error('specialists_payrise_specificity_perc') is-invalid @enderror"
                        name="specialists_payrise_specificity_perc"
                        value="{{ old('specialists_payrise_specificity_perc') }}"
                        autocomplete="specialists_payrise_specificity_perc" autofocus>

                        @error('specialists_payrise_specificity_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="specialists_payrise_specificity_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="specialists_payrise_specificity_amount"
                        type="text"
                        class="form-control @error('specialists_payrise_specificity_amount') is-invalid @enderror"
                        name="specialists_payrise_specificity_amount"
                        value="{{ old('specialists_payrise_specificity_amount') }}"
                        autocomplete="specialists_payrise_specificity_amount" autofocus>

                        @error('specialists_payrise_specificity_amount')
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
                        <label for="specialists_additional_stimulation_perc" class="col-md-2 col-form-label">процент</label>

                        <input id="specialists_additional_stimulation_perc"
                        type="text"
                        class="form-control @error('specialists_additional_stimulation_perc') is-invalid @enderror"
                        name="specialists_additional_stimulation_perc"
                        value="{{ old('specialists_additional_stimulation_perc') }}"
                        autocomplete="specialists_additional_stimulation_perc" autofocus>

                        @error('specialists_additional_stimulation_perc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="ml-6 mr-4">
                        <label for="specialists_additional_stimulation_amount" class="col-md-2 col-form-label">сумма</label>

                        <input id="specialists_additional_stimulation_amount"
                        type="text"
                        class="form-control @error('specialists_additional_stimulation_amount') is-invalid @enderror"
                        name="specialists_additional_stimulation_amount"
                        value="{{ old('specialists_additional_stimulation_amount') }}"
                        autocomplete="specialists_additional_stimulation_amount" autofocus>

                        @error('specialists_additional_stimulation_amount')
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
