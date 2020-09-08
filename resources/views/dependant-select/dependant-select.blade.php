<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2>Laravel Livewire Dependant Select</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                    <livewire:dependant-select.select
                                        title="City"
                                        :value="$city"
                                        :options="$cities"
                                        emitUpEvent="citySelected"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>
                                    <livewire:dependant-select.select
                                        title="Brand"
                                        :value="$brand"
                                        :options="$brands"
                                        key="city-{{ $city ?? 'none' }}-brands"
                                        emitUpEvent="brandSelected"
                                    />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <livewire:dependant-select.select
                                    title="Model"
                                    :value="$model"
                                    :options="$models"
                                    key="brand-{{ $brand ?? 'none' }}-models"
                                    emitUpEvent="modelSelected"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="card footer">
                        <button wire:click="onMakeItRainClick" class="btn btn-primary {{ $ready ? '' : 'disabled'}}">
                            Make it RAIN!
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                @if($message != null)
                    {{ $message }}
                @endif
            </div>
        </div>
    </div>
</div>