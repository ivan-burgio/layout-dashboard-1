@extends('layout')

@section('content')
    <main class="w-full p-8 mx-auto my-8">
        <h1 class="text-2xl font-bold text-center">Crear Blog</h1>

        <a href="{{ url('/') }}" class="bg-red-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-800">&larr; Volver</a>

        @include('pages.blogs.formulario')

    </main>
@endsection
