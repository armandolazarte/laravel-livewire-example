<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>

            <input wire:model="title"
                   type="text"
                   class="form-control"
                   id="exampleInputTitle">

            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputName">Image</label>

            <input wire:model="image"
                   type="file"
                   class="form-control"
                   id="exampleInputName">

            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
