<div>
    <div class="form-group">
    <label>Titulo</label>
        <input wire:model="titulo" type="text" class="form-control">
        @if ($errors->has('titulo'))
            <p style="color: red;">{{$errors->first('titulo')}}</p>
        @endif
    </div>

    <div class="form-group">
        <label>Contenido</label>
        <textarea wire:model="contenido" type="text" class="form-control"></textarea>
        @if ($errors->has('contenido'))
            <p style="color: red;">{{$errors->first('contenido')}}</p>
        @endif
    </div>

    <div class="text-right">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button wire:click="guardar" class="btn btn-primary">Guardar</button>
    </div>
</div>