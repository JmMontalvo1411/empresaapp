@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    <p>Aquí puedes encontrar información sobre nuestros servicios.</p>

    @if($param)
        <p>Has seleccionado el servicio: {{ $param }}</p>
    @else
        <p>No has seleccionado ningún servicio en particular.</p>
    @endif
@endsection
