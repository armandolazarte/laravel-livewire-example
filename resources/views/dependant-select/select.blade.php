<div>
    <div class="form-group">
        <label for="country">{{ $title ?? 'No tiene titulo' }}</label>
        <select wire:model="value" class="form-control" id="country">
            <option value="">Escoge un {{ $title ?? 'no opcion' }}</option>

            @foreach ($options ?? [] as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
</div>