<fieldset>
    <legend>Información General</legend>

    <label for="titulo">Titulo:</label>
    <input type="text" id="titulo" name="propiedad[titulo]" placeholder="Titulo Propiedad"
        value="">

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio Propiedad"
        value="">

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" accept="image/jpeg,image/png" name="propiedad[imagen]">

    <label for="descripcion">Descripción:</label>
    <textarea name="propiedad[descripcion]" id="descripcion" cols="30" rows="10"></textarea>
</fieldset>

<fieldset>
    <legend>Información de la Propiedad</legend>

    <label for="habitaciones">Habitaciones:</label>
    <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="Ej: 3" min="1"
        max="9" value="">

    <label for="wc">Baños:</label>
    <input type="number" id="wc" name="propiedad[wc]" placeholder="Ej: 3" min="1" max="9"
        value="">

    <label for="estacionamiento">Estacionamiento:</label>
    <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="Ej: 3" min="0"
        max="9" value="">
</fieldset>

<fieldset>
    <legend>Vendedor</legend>
    <label for="vendedor">Vendedor</label>
    <select name="propiedad[vendedores_id]" id="vendedor">
        <option selected value="">-- Seleccione --</option>
        @foreach ($data['vendedores'] as $vendedor)
            <option value="">
                {{ $vendedor->nombre }}
            </option>
        @endforeach
    </select>
</fieldset>
