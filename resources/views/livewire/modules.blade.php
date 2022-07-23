<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <form action="/organizations/structure" method="POST">
            @csrf
            <div class="add-input">
                <div class="d-flex flex-row justify-content-center">
                    <button type="button" name="add" class="px-3 btn btn-sm btn-outline-primary rounded-pill">
                        <span class="fs-4">+</span>
                    </button>
                    <svg class="align-self-center" width="70" height="3" viewBox="0 0 70 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="70" y2="0.5" stroke="black" stroke-opacity="0.3"/>
                    </svg>
                    <div class="input-group-lg">
                        <input type="text" name="structure_id" value="{{$structure_id}}" hidden />
                        <input id="post_1" type="text" class="form-control" placeholder="Должность" value="{{ old('post_1') }}" wire:model="post_1.0">
                        @error('post_1.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <svg class="align-self-center" width="70" height="3" viewBox="0 0 70 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="0.5" x2="70" y2="0.5" stroke="black" stroke-opacity="0.3"/>
                    </svg>
                    <button type="button" name="add" class="px-3 btn btn-sm btn-outline-primary rounded-pill">
                        <span class="fs-4">+</span>
                    </button>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <svg class="align-self-center" width="2" height="70" viewBox="0 0 2 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="100" x2="1" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="2"/>
                    </svg>
                    <button type="button" name="add" wire:click.prevent="add({{$i}})" class="mb-2 px-3 align-self-center btn btn-sm btn-outline-primary rounded-pill">
                        <span class="fs-4">+</span>
                    </button>
                </div>
            </div>
            @foreach($inputs as $key => $value)
                <div class="add-input col-14 align-self-center">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="input-group-lg">
                            <input type="text" name="structure_id" value="{{$structure_id}}" hidden />
                            <input type="text" class="form-control" placeholder="Должность" wire:model="post_1.{{ $value }}">
                            @error('post_1.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <button class="ms-2 mb-2 py-2 px-3 align-self-center btn btn-sm btn btn-outline-danger rounded-pill" wire:click.prevent="remove({{$key}})">
                            <span class="fs-6">x</span>
                        </button>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <svg class="align-self-center" width="2" height="70" viewBox="0 0 2 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1" y1="100" x2="1" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="2"/>
                        </svg>
                        <button type="button" name="add" wire:click.prevent="add({{$i}})" class="mb-2 px-3 align-self-center btn btn-sm btn-outline-primary rounded-pill">
                            <span class="fs-4">+</span>
                        </button>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                <button type="submit" wire:click.prevent="store()" class="btn btn-primary p-3">Сохранить</button>
            </div>
        </form>
    </div>
</div>

