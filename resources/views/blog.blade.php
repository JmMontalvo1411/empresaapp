@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>Blog</h1>
    <p>Aquí puedes encontrar nuestras publicaciones en el blog.</p>

    @if($param)
        <p>Estás viendo la entrada del blog número: {{ $param }}</p>
    @else
        <p>No has seleccionado ninguna entrada en particular.</p>
    @endif
@endsection
