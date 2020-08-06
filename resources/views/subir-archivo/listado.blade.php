<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputName">Title</label>

            <input wire:model="title"
                   type="text"
                   class="form-control"
                   id="exampleInputName"
                   placeholder="Enter title">

            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputName">File</label>

            <input wire:model="name"
                   type="file"
                   class="form-control"
                   id="exampleInputName">

            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
