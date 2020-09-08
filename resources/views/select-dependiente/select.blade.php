<div>
    <div class="form-group">
        <label for="provincia">{{ $titulo ?? 'No tiene titulo' }}</label>
        <select wire:model="valor" class="form-control text-uppercase" id="provincia">
            <option value="">Escoge un {{ $titulo ?? 'no opcion' }}</option>

            @foreach ($opciones ?? [] as $opcion)
                <option value="{{ $opcion->id }}">{{ $opcion->nombre }}</option>
            @endforeach
        </select>
    </div>
</div>
