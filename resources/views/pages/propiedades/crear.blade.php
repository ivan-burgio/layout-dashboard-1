@extends('layout')

@section('content')
    <main class="contenedor seccion">
        <h1>Crear Propiedad</h1>

        <a href="{{ url('/') }}" class="boton boton-verde">&larr; Volver</a>

        @include('pages.propiedades.formulario')

    </main>
@endsection
