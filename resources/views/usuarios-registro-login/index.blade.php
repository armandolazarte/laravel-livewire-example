@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h5 style="font-size: 23px;">Laravel Livewire - Login Register Example - NiceSnippets.com</h5>
                    </div>

                    <div class="card-body">
                        @livewire('usuarios-registro-login')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection