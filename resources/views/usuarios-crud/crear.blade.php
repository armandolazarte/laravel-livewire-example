<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>

        <input wire:model="name"
               type="text"
               class="form-control"
               id="exampleFormControlInput1"
               placeholder="Enter Name">

        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput2">Email address</label>

        <input wire:model="email"
               type="email"
               class="form-control"
               id="exampleFormControlInput2"
               placeholder="Enter Email">

        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
    </div>

    <button wire:click.prevent="store()" class="btn btn-success">Guardar</button>
</form>