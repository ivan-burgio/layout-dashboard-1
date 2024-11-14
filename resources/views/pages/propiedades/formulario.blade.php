<form class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
    <fieldset class="mb-6">
        <legend class="text-2xl font-semibold text-gray-700 pb-2">Información General</legend>

        <label for="titulo" class="block text-gray-700 font-semibold uppercase mt-4">Titulo:</label>
        <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
            value="{{ old('propiedad.titulo') }}">

        <label for="precio" class="block text-gray-700 font-semibold uppercase mt-4">Precio:</label>
        <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
            value="{{ old('propiedad.precio') }}">

        <label for="imagen" class="block text-gray-700 font-semibold uppercase mt-4">Imagen:</label>
        <input type="file" id="imagen" accept="image/jpeg,image/png" name="propiedad[imagen]"
            class="block w-full p-3 mt-2 border border-gray-300 rounded-lg">

        <label for="descripcion" class="block text-gray-700 font-semibold uppercase mt-4">Descripción:</label>
        <textarea name="propiedad[descripcion]" id="descripcion" cols="30" rows="10"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
    </fieldset>

    <fieldset class="mb-6">
        <legend class="text-2xl font-semibold text-gray-700 pb-2">Información de la Propiedad</legend>

        <label for="habitaciones" class="block text-gray-700 font-semibold uppercase mt-4">Habitaciones:</label>
        <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1"
            max="9"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
            value="{{ old('propiedad.habitaciones') }}">

        <label for="wc" class="block text-gray-700 font-semibold uppercase mt-4">Baños:</label>
        <input type="number" id="wc" name="propiedad[wc]" placeholder="Ej: 3" min="1" max="9"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
            value="{{ old('propiedad.wc') }}">

        <label for="estacionamiento" class="block text-gray-700 font-semibold uppercase mt-4">Estacionamiento:</label>
        <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="0"
            max="9"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"
            value="{{ old('propiedad.estacionamiento') }}">
    </fieldset>

    <fieldset class="mb-6">
        <legend class="text-2xl font-semibold text-gray-700 pb-2">Vendedor</legend>

        <label for="vendedor" class="block text-gray-700 font-semibold uppercase mt-4">Vendedor</label>
        <select name="propiedad[vendedores_id]" id="vendedor"
            class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            <option selected value="">-- Seleccione --</option>
            @foreach ($data['vendedores'] as $vendedor)
                <option value="{{ $vendedor['id'] }}">
                    {{ $vendedor['nombre'] }}
                </option>
            @endforeach
        </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad"
        class="bg-green-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-green-800">
</form>
