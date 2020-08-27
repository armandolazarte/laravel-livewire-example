@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 style="font-size: 19px;">Laravel Livewire - Dynamically Add or Remove input fields - NiceSnippets.com</h5>
                    </div>

                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        @livewire('usuarios-campos-dinamicos')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
