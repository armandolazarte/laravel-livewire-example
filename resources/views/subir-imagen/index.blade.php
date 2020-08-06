@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <div class="card mt-5">
                    <div class="card-header bg-success">
                        <h2 class="text-white">Laravel Livewire Image Ipload - NiceSnippets.com</h2>
                    </div>

                    <div class="card-body">
                        @livewire('subir-imagen')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection