<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2>Laravel Livewire Select Dependiente</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <livewire:select-dependiente.select
                                    titulo="Provincia"
                                    :valor="$provincia"
                                    :opciones="$provincias"
                                    emitirEvento="provinciaSeleccionada"
                                />
                            </div>
                            <div class="col-md-4">
                                <livewire:select-dependiente.select
                                    titulo="Departamento"
                                    :valor="$departamento"
                                    :opciones="$departamentos"
                                    key="provincia-{{ $provincia ?? 'none' }}-departamentos"
                                    emitirEvento="departamentoSeleccionado"
                                />
                            </div>
                            <div class="col-md-4">
                                <livewire:select-dependiente.select
                                    titulo="Localidad"
                                    :valor="$localidad"
                                    :opciones="$localidades"
                                    key="departamento-{{ $departamento ?? 'none' }}-localidades"
                                    emitirEvento="localidadSeleccionado"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="card footer">
                        <button wire:click="onHazQueLluevaClick" class="btn btn-primary" {{ $listo ? '' : 'disabled'}}>
                            ¡Haz que llueva!
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                @if($mensaje != null)
                    <div class="alert alert-success mt-3" role="alert">
                        <h4 class="alert-heading">¡Bien hecho!</h4>
                        <p>{{ $mensaje }}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>