<div class="row">
    <div class="col-4">
        <select wire:model="provincia" name="provincia" class="custom-select text-uppercase">
            <option value="0">Seleccione una provincia</option>

            @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <select wire:model="departamento" name="departamento" class="custom-select text-uppercase">
            <option value="">Seleccione un departamento</option>

            @foreach ($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <select wire:model="localidad" name="localidad" class="custom-select text-uppercase">
            <option value="">Seleccione una localidad</option>

            @foreach ($localidades as $localidad)
                <option value="{{ $localidad->id }}">{{ $localidad->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>