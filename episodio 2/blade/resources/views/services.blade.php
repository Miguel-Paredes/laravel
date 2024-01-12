{{-- Importa el archivo landing--}}
@extends('layouts.landing')

{{-- Modifica la porcion del titulo --}}
@section('title','Services')
{{-- Permite ingresar informacion al body --}}
@section('content')
    <h1>Services</h1>
    {{-- Importa le informacion de card --}}
    @component('_components.card')
        {{-- Agregar la informacion a las variables de card --}}
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dolor set aimet.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem ipsum.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Service 3')
        @slot('content', 'Lorem ipsum.')
    @endcomponent
@endsection
