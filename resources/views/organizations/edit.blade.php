@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/organizations/{{ $organization->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row pt-4">
                    <h1>Регистрация организации</h1>
                </div>

                <div class="form-group row pt-4">
                    <label for="org_name" class="col-md-4 col-form-label font-weight-bold">Наименование организации</label>

                    <input id="org_name"
                    type="text"
                    class="form-control @error('org_name') is-invalid @enderror"
                    name="org_name"
                    value="{{ old('org_name') }}"
                    autocomplete="org_name" autofocus>

                    @error('org_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Наименование организации-->
                </div>

                <div class="form-group row">
                    <h3 class="col-md-4 col-form-label font-weight-bold">Юридический адрес</h3>
                    <!--Юридический адрес-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_legal_index" class="col-md-4 col-form-label">Почтовый индекс</label>

                    <input id="org_adress_legal_index"
                    type="text"
                    class="form-control @error('org_adress_legal_index') is-invalid @enderror"
                    name="org_adress_legal_index"
                    value="{{ old('org_adress_legal_index') }}"
                    autocomplete="org_adress_legal_index" autofocus>

                    @error('org_adress_legal_index')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Почтовый индекс-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_legal_city" class="col-md-4 col-form-label">Город</label>

                    <input id="org_adress_legal_city"
                    type="text"
                    class="form-control @error('org_adress_legal_city') is-invalid @enderror"
                    name="org_adress_legal_city"
                    value="{{ old('org_adress_legal_city') }}"
                    autocomplete="org_adress_legal_city" autofocus>

                    @error('org_adress_legal_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Город-->
                </div>


                <div class="form-group row offset-1">
                    <label for="org_adress_legal_street" class="col-md-4 col-form-label">Улица</label>

                    <input id="org_adress_legal_street"
                    type="text"
                    class="form-control @error('org_adress_legal_street') is-invalid @enderror"
                    name="org_adress_legal_street"
                    value="{{ old('org_adress_legal_street') }}"
                    autocomplete="org_adress_legal_street" autofocus>

                    @error('org_adress_legal_street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Улица-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_legal_house" class="col-md-4 col-form-label">Дом</label>

                    <input id="org_adress_legal_house"
                    type="text"
                    class="form-control @error('org_adress_legal_house') is-invalid @enderror"
                    name="org_adress_legal_house"
                    value="{{ old('org_adress_legal_house') }}"
                    autocomplete="org_adress_legal_house" autofocus>

                    @error('org_adress_legal_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Дом-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_legal_corps" class="col-md-4 col-form-label">Корпус</label>

                    <input id="org_adress_legal_corps"
                    type="text"
                    class="form-control @error('org_adress_legal_corps') is-invalid @enderror"
                    name="org_adress_legal_corps"
                    value="{{ old('org_adress_legal_corps') }}"
                    autocomplete="org_adress_legal_corps" autofocus>

                    @error('org_adress_legal_corps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Корпус-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_legal_office" class="col-md-4 col-form-label">Офис</label>

                    <input id="org_adress_legal_office"
                    type="text"
                    class="form-control @error('org_adress_legal_office') is-invalid @enderror"
                    name="org_adress_legal_office"
                    value="{{ old('org_adress_legal_office') }}"
                    autocomplete="org_adress_legal_office" autofocus>

                    @error('org_adress_legal_office')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Юридический адрес Офис-->
                </div>

                <div class="form-group row">
                    <h3 class="col-md-4 col-form-label font-weight-bold">Почтовый адрес</h3>
                    <!--Почтовый адрес-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_index" class="col-md-4 col-form-label">Почтовый индекс</label>

                    <input id="org_adress_post_index"
                    type="text"
                    class="form-control @error('org_adress_post_index') is-invalid @enderror"
                    name="org_adress_post_index"
                    value="{{ old('org_adress_post_index') }}"
                    autocomplete="org_adress_post_index" autofocus>

                    @error('org_adress_post_index')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Почтовый индекс-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_city" class="col-md-4 col-form-label">Город</label>

                    <input id="org_adress_post_city"
                    type="text"
                    class="form-control @error('org_adress_post_city') is-invalid @enderror"
                    name="org_adress_post_city"
                    value="{{ old('org_adress_post_city') }}"
                    autocomplete="org_adress_post_city" autofocus>

                    @error('org_adress_post_city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Город-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_street" class="col-md-4 col-form-label">Улица</label>

                    <input id="org_adress_post_street"
                    type="text"
                    class="form-control @error('org_adress_post_street') is-invalid @enderror"
                    name="org_adress_post_street"
                    value="{{ old('org_adress_post_street') }}"
                    autocomplete="org_adress_post_street" autofocus>

                    @error('org_adress_post_street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Улица-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_house" class="col-md-4 col-form-label">Дом</label>

                    <input id="org_adress_post_house"
                    type="text"
                    class="form-control @error('org_adress_post_house') is-invalid @enderror"
                    name="org_adress_post_house"
                    value="{{ old('org_adress_post_house') }}"
                    autocomplete="org_adress_post_house" autofocus>

                    @error('org_adress_post_house')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Дом-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_corps" class="col-md-4 col-form-label">Корпус</label>

                    <input id="org_adress_post_corps"
                    type="text"
                    class="form-control @error('org_adress_post_corps') is-invalid @enderror"
                    name="org_adress_post_corps"
                    value="{{ old('org_adress_post_corps') }}"
                    autocomplete="org_adress_post_corps" autofocus>

                    @error('org_adress_post_corps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Корпус-->
                </div>

                <div class="form-group row offset-1">
                    <label for="org_adress_post_office" class="col-md-4 col-form-label">Офис</label>

                    <input id="org_adress_post_office"
                    type="text"
                    class="form-control @error('org_adress_post_office') is-invalid @enderror"
                    name="org_adress_post_office"
                    value="{{ old('org_adress_post_office') }}"
                    autocomplete="org_adress_post_office" autofocus>

                    @error('org_adress_post_office')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Почтовый адрес Офис-->
                </div>

                <div class="form-group row">
                    <label for="org_phone" class="col-md-4 col-form-label font-weight-bold">Телефон</label>

                    <input id="org_phone"
                    type="text"
                    class="form-control @error('org_phone') is-invalid @enderror"
                    name="org_phone"
                    value="{{ old('org_phone') }}"
                    autocomplete="org_phone" autofocus>

                    @error('org_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Телефон-->
                </div>

                <div class="form-group row">
                    <label for="org_fax" class="col-md-4 col-form-label font-weight-bold">Факс</label>

                    <input id="org_fax"
                    type="text"
                    class="form-control @error('org_fax') is-invalid @enderror"
                    name="org_fax"
                    value="{{ old('org_fax') }}"
                    autocomplete="org_fax" autofocus>

                    @error('org_fax')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Факс-->
                </div>

                <div class="form-group row">
                    <label for="org_email" class="col-md-4 col-form-label font-weight-bold">Электронный адрес</label>

                    <input id="org_email"
                    type="text"
                    class="form-control @error('org_email') is-invalid @enderror"
                    name="org_email"
                    value="{{ old('org_email') }}"
                    autocomplete="org_email" autofocus>

                    @error('org_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Электронный адрес-->
                </div>

                <div class="form-group row">
                    <label for="org_website" class="col-md-4 col-form-label font-weight-bold">Сайт</label>

                    <input id="org_website"
                    type="text"
                    class="form-control @error('org_website') is-invalid @enderror"
                    name="org_website"
                    value="{{ old('org_website') }}"
                    autocomplete="org_website" autofocus>

                    @error('org_website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Сайт-->
                </div>

                <div class="form-group row">
                    <label for="org_directorate" class="col-md-4 col-form-label font-weight-bold">Наименование банка</label>

                    <input id="org_directorate"
                    type="text"
                    class="form-control @error('org_directorate') is-invalid @enderror"
                    name="org_directorate"
                    value="{{ old('org_directorate') }}"
                    autocomplete="org_directorate" autofocus>

                    @error('org_directorate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Дирекция-->
                </div>

                <div class="form-group row">
                    <label for="org_debit_account" class="col-md-4 col-form-label font-weight-bold">Расчетный счет</label>

                    <input id="org_debit_account"
                    type="text"
                    class="form-control @error('org_debit_account') is-invalid @enderror"
                    name="org_debit_account"
                    value="{{ old('org_debit_account') }}"
                    autocomplete="org_debit_account" autofocus>

                    @error('org_debit_account')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Расчетный счет-->
                </div>

                <div class="form-group row">
                    <label for="org_bic" class="col-md-4 col-form-label font-weight-bold">Банковский идентификационный код (БИК)</label>

                    <input id="org_bic"
                    type="text"
                    class="form-control @error('org_bic') is-invalid @enderror"
                    name="org_bic"
                    value="{{ old('org_bic') }}"
                    autocomplete="org_bic" autofocus>

                    @error('org_bic')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Банковский идентификационный код (БИК)-->
                </div>

                <div class="form-group row">
                    <label for="org_unp" class="col-md-4 col-form-label font-weight-bold">Учётный номер плательщика (УНП)</label>

                    <input id="org_unp"
                    type="text"
                    class="form-control @error('org_unp') is-invalid @enderror"
                    name="org_unp"
                    value="{{ old('org_unp') }}"
                    autocomplete="org_unp" autofocus>

                    @error('org_unp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--УНП-->
                </div>

                <div class="form-group row">
                    <label for="org_okpo" class="col-md-4 col-form-label font-weight-bold">Общий классификатор предприятий и организаций (ОКПО)</label>

                    <input id="org_okpo"
                    type="text"
                    class="form-control @error('org_okpo') is-invalid @enderror"
                    name="org_okpo"
                    value="{{ old('org_okpo') }}"
                    autocomplete="org_okpo" autofocus>

                    @error('org_okpo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--ОКПО-->
                </div>

                <div class="row pt-4">
                    <button class="p-3 mt-3 btn btn-primary d-inline-block">Зарегистрировать организацию</button>
                </div>

            </div>
        </div>

    </form>
</div>
@endsection
