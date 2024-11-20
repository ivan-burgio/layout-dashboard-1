@extends('layout')

@section('content')
    <main class="w-full p-8 mx-auto my-8">
        <h1 class="text-2xl font-bold text-center">Actualizar Vendedor/a</h1>

        <a href="{{ url('/') }}" class="bg-red-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-800">&larr; Volver</a>

        <form class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
            <fieldset class="mb-6">
                <legend class="text-2xl font-semibold text-gray-700 pb-2">Información del Vendedor/a</legend>
        
                <label for="nombre" class="block text-gray-700 font-semibold uppercase mt-4">Nombre:</label>
                <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor/a"
                    class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    value="{{ $data['vendedorSeleccionado']['nombre'] }}">
            </fieldset>
        
            <fieldset class="mb-6">
                <legend class="text-2xl font-semibold text-gray-700 pb-2">Contacto del Vendedor/a</legend>
        
                <label for="telefono" class="block text-gray-700 font-semibold uppercase mt-4">Teléfono:</label>
                <input type="tel" id="telefono" name="vendedor[telefono]" placeholder="Teléfono Vendedor/a"
                    class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
                    value="{{ $data['vendedorSeleccionado']['telefono'] }}">
            </fieldset>
        
            <input type="submit" value="Guardar Vendedor/a"
                class="bg-green-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-green-800">
        </form>        

    </main>
@endsection
