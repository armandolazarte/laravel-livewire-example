<div class="row">
    <div class="col-4">
        <select wire:model="provinciaId" name="provincia" id="provincia" class="custom-select text-uppercase">
            <option selected value="">{{ $defaultProvincia }}</option>

            @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-4">
        <select wire:model="departamentoId" name="departamento" id="departamento" class="custom-select text-uppercase">
            <option selected >{{ $defaultDepartamento }}</option>

            @if ($departamentos)
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>