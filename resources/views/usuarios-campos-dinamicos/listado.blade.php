<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form>
        <div class=" add-input">
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <input wire:model="name.0"
                               type="text"
                               class="form-control"
                               placeholder="Enter Name">

                        @error('name.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <input wire:model="email.0"
                               type="email"
                               class="form-control"
                               placeholder="Enter Email">

                        @error('email.0') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-md-2">
                    <button wire:click.prevent="add({{ $i }})"
                            class="btn text-white btn-info btn-sm">
                        Agregar
                    </button>
                </div>
            </div>
        </div>

        @foreach($inputs as $key => $value)
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input wire:model="name.{{ $value }}"
                                   type="text"
                                   class="form-control"
                                   placeholder="Enter Name">

                            @error('name.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input wire:model="email.{{ $value }}"
                                   type="email"
                                   class="form-control"
                                   placeholder="Enter Email">

                            @error('email.'.$value) <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button wire:click.prevent="remove({{ $key }})"
                                class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-md-12">
                <button wire:click.prevent="store()"
                        type="button"
                        class="btn btn-success btn-sm">
                    Guardar
                </button>
            </div>
        </div>
    </form>
</div>