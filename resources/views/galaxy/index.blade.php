<div>
    <div wire:ignore>
        <div class="modal fade" id="galaxy-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <livewire:galaxy.form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <button type="button" wire:click="$emitTo('galaxy.form', 'open')" class="btn btn-outline-light">Create Galaxy</button>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($galaxies as $id => $galaxy)
                            <li wire:key="{{ $id }}" class="list-group-item">
                                <a href wire:click.prevent="$emitTo('galaxy.form', 'open', {{ $id }})">
                                    {{ $galaxy }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.livewire.on('toggleGalaxyFormModal', () => $('#galaxy-form-modal').modal('toggle'));
    </script>
@endpush