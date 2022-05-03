@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a la busqueda de pokemones') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ya estàs logueado!') }}

                    <div>
                        <a href="{{route('pokemon')}}">Buscar pokemon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
