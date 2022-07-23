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
                <div class="d-flex flex-row">
                    <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3">
                        <span class="h3">+</span>
                    </button>
                    <svg class="align-self-center" width="50" height="2" viewBox="0 0 101 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="100" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="3"/>
                    </svg>
                    <div class="input-group-lg">
                        <input type="text" name="structure_id" value="{{$structure_id}}" hidden />
                        <input type="text" class="form-control" placeholder="Должность" value="{{ old('post_name') }}" wire:model="post_name.0">
                        @error('post_name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <svg class="align-self-center" width="50" height="2" viewBox="0 0 101 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="1" y1="1" x2="100" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="3"/>
                    </svg>
                    <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3">
                        <span class="h3">+</span>
                    </button>
                </div>
                <div class="d-flex flex-row justify-content-center ml-5">
                    <div>
                        <svg class="align-self-center ml-4 mr-1" width="2" height="70" viewBox="0 0 2 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1" y1="100" x2="1" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="2"/>
                        </svg>
                        <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3 ml-3">
                            <span class="h3">+</span>
                        </button>
                    </div>
                </div>
            </div>
            @foreach($inputs as $key => $value)
                <div class="add-input">
                    <div class="d-flex flex-row justify-content-center">
                        <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3">
                            <span class="h3">+</span>
                        </button>
                        <svg class="align-self-center" width="50" height="2" viewBox="0 0 101 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1" y1="1" x2="100" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="3"/>
                        </svg>
                        <div class="input-group-lg">
                            <input type="text" name="structure_id" value="{{$structure_id}}" hidden />
                            <input type="text" class="form-control" placeholder="Должность" wire:model="post_name.{{ $value }}">
                            @error('post_name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <button class="btn btn-danger pl-3 pr-3 ml-1" wire:click.prevent="remove({{$key}})">
                            <span class="h6">x</span>
                        </button>
                        <svg class="align-self-center" width="50" height="2" viewBox="0 0 101 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1" y1="1" x2="100" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="3"/>
                        </svg>
                        <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3">
                            <span class="h3">+</span>
                        </button>
                    </div>
                    <div class="d-flex flex-row justify-content-center ml-5">
                        <div>
                            <svg class="align-self-center ml-4 mr-1" width="2" height="70" viewBox="0 0 2 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1" y1="100" x2="1" y2="1" stroke="black" stroke-opacity="0.3" stroke-width="2"/>
                            </svg>
                            <button type="button" name="add" wire:click.prevent="add({{$i}})" class="btn btn-outline-primary pr-3 pl-3 ml-3">
                                <span class="h3">+</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                <button type="button" wire:click.prevent="store()" class="btn btn-primary p-3">Сохранить</button>
            </div>
        </form>
    </div>
</div>
