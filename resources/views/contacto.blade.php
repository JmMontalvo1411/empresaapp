@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <p>Para ponerse en contacto con nosotros, por favor complete el siguiente formulario:</p>

    <form>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" placeholder="Correo electrónico">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Mensaje"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
