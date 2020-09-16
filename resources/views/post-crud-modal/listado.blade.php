<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h2 class="float-left">Laravel Livewire Post CRUD Modal</h2>

                        <button type="button" class="btn btn-secondary float-right" data-toggle="modal" data-target="#modalForm">
                            Agregar Post
                        </button>
                    </div>

                    <div class="card-body">
                        @if ($posts->count())
                            <table class="table table-striped">
                                <thead>
                                    <th style="width: 20%">Titulo</th>
                                    <th>Descripción</th>
                                    <th style="width: 20%">Acciones</th>
                                </thead>
                                <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->titulo }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($post->contenido, 100) }}</td>
                                        <td>
                                            <button wire:click="selectItem({{ $post->id }}, 'actualizar')" class="btn btn-sm btn-success">Actualizar</button>
                                            <button wire:click="selectItem({{ $post->id }}, 'eliminar')" class="btn btn-sm btn-danger">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $posts->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormLabel">Guardar Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('post-crud-modal.post-crud-modal-form')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFormEliminar" tabindex="-1" aria-labelledby="modalFormEliminarPost" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormEliminarPost">Eliminar Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>¿Desea continuar?</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button wire:click="eliminar" type="button" class="btn btn-primary">Si</button>
                </div>
            </div>
        </div>
    </div>
</div>