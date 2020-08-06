@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Laravel Livewire Multiple Image Upload - NiceSnippets.com</h3>
                    </div>

                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @livewire('multiples-imagenes')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection