@extends('layouts.app')

@section('title', 'Proyectos')

@section('content')
    <h1>Proyectos</h1>
    <p>Aquí puedes encontrar información sobre nuestros proyectos.</p>

    @if($param)
        <p>Has seleccionado el proyecto: {{ $param }}</p>
    @else
        <p>No has seleccionado ningún proyecto en particular.</p>
    @endif
@endsection
