@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row pt-4">
                    <h1>Редактировать профиль</h1>
                </div>

                <div class="form-group row pt-4">
                    <label for="contact_phone" class="col-md-6 col-form-label font-weight-bold">Контактный телефон</label>

                    <input id="contact_phone"
                    type="text"
                    class="form-control @error('contact_phone') is-invalid @enderror"
                    name="contact_phone"
                    value="{{ old('contact_phone') ?? $user->profile->contact_phone }}"
                    autocomplete="contact_phone" autofocus>

                    @error('contact_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <!--Контактный телефон-->
                </div>

                <div class="row pt-4">
                    <button class="p-3 mt-2 btn btn-primary d-inline-block">Сохранить изменения</button>
                </div>

            </div>
        </div>
    </form>

</div>
@endsection
