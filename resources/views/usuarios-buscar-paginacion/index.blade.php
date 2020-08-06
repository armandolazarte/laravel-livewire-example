@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white ">
                        <strong>Search with Laravel Livewire - Nicesnippets.com</strong>
                    </div>

                    <div class="card-body">
                        @livewire('usuarios-buscar-paginacion')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection