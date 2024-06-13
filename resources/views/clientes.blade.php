@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    <p>Aquí puedes encontrar información sobre nuestros clientes.</p>

    @if($param)
        <p>Has seleccionado el cliente: {{ $param }}</p>
    @else
        <p>No has seleccionado ningún cliente en particular.</p>
    @endif
@endsection
