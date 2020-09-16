@extends('layouts.app')

@section('content')
    <livewire:post-crud-modal.post-crud-modal/>
@endsection

@push('scripts')
    <script>
        window.addEventListener('cerrarModal', event => {
            $("#modalForm").modal('hide');
        })

        window.addEventListener('abrirModal', event => {
            $("#modalForm").modal('show');
        })

        window.addEventListener('abrirEliminarModal', event => {
            $("#modalFormEliminar").modal('show');
        })

        window.addEventListener('cerrarEliminarModal', event => {
            $("#modalFormEliminar").modal('hide');
        })

        $(document).ready(function(){
            // Este evento se activa cuando el modal está oculto
            $("#modalForm").on('hidden.bs.modal', function(){
                livewire.emit('forzarCerrarModal');
            });
        });
    </script>
@endpush