@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire Dropdowns Ciudades</h2>
                    </div>

                    <div class="card-body">
                        @livewire('dropdowns-ciudades')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection