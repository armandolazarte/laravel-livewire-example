<div>
    @include('usuarios-modal.crear')
    @include('usuarios-modal.actualizar')

    @if (session()->has('message'))
        <div class="alert alert-success" style="margin-top:30px;">x
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                    <button wire:click="edit({{ $value->id }})"
                            class="btn btn-primary btn-sm"
                            data-toggle="modal"
                            data-target="#updateModal">
                        Editar
                    </button>
                    <button wire:click="delete({{ $value->id }})"
                            class="btn btn-danger btn-sm">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>