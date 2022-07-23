@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/organizations" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-6 offset-3">

                <div class="row pt-4">
                    <h1>Регистрация организации</h1>
                </div>

                <div class="form-group row pt-4 mb-4">
                    <label for="organization_name" class="col-md-10 col-form-label fw-bold">Наименование организации</label>

                    <input id="organization_name"
                    type="text"
                    class="form-control @error('organization_name') is-invalid @enderror"
                    name="organization_name"
                    value="{{ old('organization_name') }}"
                    autocomplete="organization_name" autofocus>

                    @error('organization_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Наименование организации-->
                </div>

                <div class="form-group row">
                    <h3 class="col-md-10 col-form-label fw-bold">Юридический адрес</h3>
                    <!--Юридический адрес-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_legal_index" class="col-md-10 col-form-label">Почтовый индекс</label>

                    <input id="organization_adress_legal_index"
                    type="text"
                    class="form-control @error('organization_adress_legal_index') is-invalid @enderror"
                    name="organization_adress_legal_index"
                    value="{{ old('organization_adress_legal_index') }}"
                    autocomplete="organization_adress_legal_index" autofocus>

                    @error('organization_adress_legal_index')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Почтовый индекс-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_legal_city" class="col-md-10 col-form-label">Город</label>

                    <input id="organization_adress_legal_city"
                    type="text"
                    class="form-control @error('organization_adress_legal_city') is-invalid @enderror"
                    name="organization_adress_legal_city"
                    value="{{ old('organization_adress_legal_city') }}"
                    autocomplete="organization_adress_legal_city" autofocus>

                    @error('organization_adress_legal_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Город-->
                </div>


                <div class="form-group row offset-1">
                    <label for="organization_adress_legal_street" class="col-md-10 col-form-label">Улица</label>

                    <input id="organization_adress_legal_street"
                    type="text"
                    class="form-control @error('organization_adress_legal_street') is-invalid @enderror"
                    name="organization_adress_legal_street"
                    value="{{ old('organization_adress_legal_street') }}"
                    autocomplete="organization_adress_legal_street" autofocus>

                    @error('organization_adress_legal_street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Улица-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_legal_house" class="col-md-10 col-form-label">Дом</label>

                    <input id="organization_adress_legal_house"
                    type="text"
                    class="form-control @error('organization_adress_legal_house') is-invalid @enderror"
                    name="organization_adress_legal_house"
                    value="{{ old('organization_adress_legal_house') }}"
                    autocomplete="organization_adress_legal_house" autofocus>

                    @error('organization_adress_legal_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Дом-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_legal_corps" class="col-md-10 col-form-label">Корпус</label>

                    <input id="organization_adress_legal_corps"
                    type="text"
                    class="form-control @error('organization_adress_legal_corps') is-invalid @enderror"
                    name="organization_adress_legal_corps"
                    value="{{ old('organization_adress_legal_corps') }}"
                    autocomplete="organization_adress_legal_corps" autofocus>

                    @error('organization_adress_legal_corps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Корпус-->
                </div>

                <div class="form-group row offset-1 mb-4">
                    <label for="organization_adress_legal_office" class="col-md-10 col-form-label">Офис</label>

                    <input id="organization_adress_legal_office"
                    type="text"
                    class="form-control @error('organization_adress_legal_office') is-invalid @enderror"
                    name="organization_adress_legal_office"
                    value="{{ old('organization_adress_legal_office') }}"
                    autocomplete="organization_adress_legal_office" autofocus>

                    @error('organization_adress_legal_office')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Офис-->
                </div>

                <div class="form-group row">
                    <h3 class="col-md-10 col-form-label fw-bold">Почтовый адрес</h3>
                    <!--Почтовый адрес-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_post_index" class="col-md-10 col-form-label">Почтовый индекс</label>

                    <input id="organization_adress_post_index"
                    type="text"
                    class="form-control @error('organization_adress_post_index') is-invalid @enderror"
                    name="organization_adress_post_index"
                    value="{{ old('organization_adress_post_index') }}"
                    autocomplete="organization_adress_post_index" autofocus>

                    @error('organization_adress_post_index')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Почтовый индекс-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_post_city" class="col-md-10 col-form-label">Город</label>

                    <input id="organization_adress_post_city"
                    type="text"
                    class="form-control @error('organization_adress_post_city') is-invalid @enderror"
                    name="organization_adress_post_city"
                    value="{{ old('organization_adress_post_city') }}"
                    autocomplete="organization_adress_post_city" autofocus>

                    @error('organization_adress_post_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Город-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_post_street" class="col-md-10 col-form-label">Улица</label>

                    <input id="organization_adress_post_street"
                    type="text"
                    class="form-control @error('organization_adress_post_street') is-invalid @enderror"
                    name="organization_adress_post_street"
                    value="{{ old('organization_adress_post_street') }}"
                    autocomplete="organization_adress_post_street" autofocus>

                    @error('organization_adress_post_street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Улица-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_post_house" class="col-md-10 col-form-label">Дом</label>

                    <input id="organization_adress_post_house"
                    type="text"
                    class="form-control @error('organization_adress_post_house') is-invalid @enderror"
                    name="organization_adress_post_house"
                    value="{{ old('organization_adress_post_house') }}"
                    autocomplete="organization_adress_post_house" autofocus>

                    @error('organization_adress_post_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Дом-->
                </div>

                <div class="form-group row offset-1">
                    <label for="organization_adress_post_corps" class="col-md-10 col-form-label">Корпус</label>

                    <input id="organization_adress_post_corps"
                    type="text"
                    class="form-control @error('organization_adress_post_corps') is-invalid @enderror"
                    name="organization_adress_post_corps"
                    value="{{ old('organization_adress_post_corps') }}"
                    autocomplete="organization_adress_post_corps" autofocus>

                    @error('organization_adress_post_corps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Корпус-->
                </div>

                <div class="form-group row offset-1 mb-4">
                    <label for="organization_adress_post_office" class="col-md-10 col-form-label">Офис</label>

                    <input id="organization_adress_post_office"
                    type="text"
                    class="form-control @error('organization_adress_post_office') is-invalid @enderror"
                    name="organization_adress_post_office"
                    value="{{ old('organization_adress_post_office') }}"
                    autocomplete="organization_adress_post_office" autofocus>

                    @error('organization_adress_post_office')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Офис-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_phone" class="col-md-10 col-form-label fw-bold">Телефон</label>

                    <input id="organization_phone"
                    type="text"
                    class="form-control @error('organization_phone') is-invalid @enderror"
                    name="organization_phone"
                    value="{{ old('organization_phone') }}"
                    autocomplete="organization_phone" autofocus>

                    @error('organization_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Телефон-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_fax" class="col-md-10 col-form-label fw-bold">Факс</label>

                    <input id="organization_fax"
                    type="text"
                    class="form-control @error('organization_fax') is-invalid @enderror"
                    name="organization_fax"
                    value="{{ old('organization_fax') }}"
                    autocomplete="organization_fax" autofocus>

                    @error('organization_fax')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Факс-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_email" class="col-md-10 col-form-label fw-bold">Электронный адрес</label>

                    <input id="organization_email"
                    type="text"
                    class="form-control @error('organization_email') is-invalid @enderror"
                    name="organization_email"
                    value="{{ old('organization_email') }}"
                    autocomplete="organization_email" autofocus>

                    @error('organization_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Электронный адрес-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_website" class="col-md-10 col-form-label fw-bold">Сайт</label>

                    <input id="organization_website"
                    type="text"
                    class="form-control @error('organization_website') is-invalid @enderror"
                    name="organization_website"
                    value="{{ old('organization_website') }}"
                    autocomplete="organization_website" autofocus>

                    @error('organization_website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Сайт-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_directorate" class="col-md-10 col-form-label fw-bold">Наименование банка</label>

                    <input id="organization_directorate"
                    type="text"
                    class="form-control @error('organization_directorate') is-invalid @enderror"
                    name="organization_directorate"
                    value="{{ old('organization_directorate') }}"
                    autocomplete="organization_directorate" autofocus>

                    @error('organization_directorate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Дирекция-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_debit_account" class="col-md-10 col-form-label fw-bold">Расчетный счет</label>

                    <input id="organization_debit_account"
                    type="text"
                    class="form-control @error('organization_debit_account') is-invalid @enderror"
                    name="organization_debit_account"
                    value="{{ old('organization_debit_account') }}"
                    autocomplete="organization_debit_account" autofocus>

                    @error('organization_debit_account')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Расчетный счет-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_bic" class="col-md-10 col-form-label fw-bold">Банковский идентификационный код (БИК)</label>

                    <input id="organization_bic"
                    type="text"
                    class="form-control @error('organization_bic') is-invalid @enderror"
                    name="organization_bic"
                    value="{{ old('organization_bic') }}"
                    autocomplete="organization_bic" autofocus>

                    @error('organization_bic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Банковский идентификационный код (БИК)-->
                </div>

                <div class="form-group row mb-4">
                    <label for="organization_unp" class="col-md-10 col-form-label fw-bold">Учётный номер плательщика (УНП)</label>

                    <input id="organization_unp"
                    type="text"
                    class="form-control @error('organization_unp') is-invalid @enderror"
                    name="organization_unp"
                    value="{{ old('organization_unp') }}"
                    autocomplete="organization_unp" autofocus>

                    @error('organization_unp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--УНП-->
                </div>

                <div class="form-group row mb-3">
                    <label for="organization_okpo" class="col-md-10 col-form-label fw-bold">Общий классификатор предприятий и организаций (ОКПО)</label>

                    <input id="organization_okpo"
                    type="text"
                    class="form-control @error('organization_okpo') is-invalid @enderror"
                    name="organization_okpo"
                    value="{{ old('organization_okpo') }}"
                    autocomplete="organization_okpo" autofocus>

                    @error('organization_okpo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--ОКПО-->
                </div>

                <div class="row pt-4 mb-5">
                    <button class="p-3 mt-3 btn btn-primary d-inline-block">Зарегистрировать организацию</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
