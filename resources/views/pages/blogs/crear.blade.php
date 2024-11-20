@extends('layout')

@section('content')
    <main class="w-full p-8 mx-auto my-8">
        <h1 class="text-2xl font-bold text-center">Crear Blog</h1>

        <a href="{{ url('/') }}"
            class="bg-red-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-800">&larr; Volver</a>

        <form class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
            <fieldset class="mb-6">
                <legend class="text-2xl font-semibold text-gray-700 pb-2">Información del Blog</legend>

                <label for="titulo" class="block text-gray-700 font-semibold uppercase mt-4">Titulo</label>
                <input type="text" id="titulo" name="blog[titulo]" placeholder="Titulo Blog"
                    class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    value="">

                <label for="imagen" class="block text-gray-700 font-semibold uppercase mt-4">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg,image/png" name="blog[imagen]"
                    class="block w-full p-3 mt-2 border border-gray-300 rounded-lg">

                <label for="texto" class="block text-gray-700 font-semibold uppercase mt-4">Texto</label>
                <textarea type="text" id="texto" name="blog[texto]" placeholder="Contenido del Blog"
                    class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
            </fieldset>

            <input type="submit" value="Guardar Blog"
                class="bg-green-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-green-800">
        </form>

    </main>
@endsection
