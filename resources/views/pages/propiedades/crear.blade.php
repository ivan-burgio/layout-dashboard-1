@extends('layout')

@section('content')
    <main class="contenedor seccion">
        <h1>Crear Propiedad</h1>

        <a href="{{ url('/') }}" class="boton boton-verde">&larr; Volver</a>

        <form class="formulario" enctype="multipart/form-data">
            @csrf

            @include('pages.propiedades.formulario')

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>
@endsection
