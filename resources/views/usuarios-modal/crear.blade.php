<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Abrir formulario
</button>

<!-- Modal -->
<div wire:ignore.self
     class="modal fade"
     id="exampleModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>

                        <input wire:model="name"
                               type="text"
                               class="form-control"
                               id="exampleFormControlInput1"
                               placeholder="Enter Name">

                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput2">Email address</label>

                        <input wire:model="email"
                               type="email"
                               class="form-control"
                               id="exampleFormControlInput2"
                               placeholder="Enter Email">

                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button wire:click.prevent="store()" type="button" class="btn btn-primary close-modal">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>