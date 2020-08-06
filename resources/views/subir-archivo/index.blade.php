@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Laravel Livewire File Upload - Nicesnippets.com
                    </div>

                    <div class="card-body">
                        @livewire('subir-archivo')
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection