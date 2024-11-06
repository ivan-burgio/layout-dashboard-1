@extends('layout')

@section('content')
    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <a href="/propiedades/crear" class="boton boton-verde">Nueva Propiedad</a>
        <a href="/vendedores/crear" class="boton boton-amarillo">Nuevo/a Vendedor</a>
        <a href="/blogs/crear" class="boton boton-verde">Nuevo blog</a>

        <h2>Propiedades</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Vendedor ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>{{ $propiedad->id }}</td>
                        <td>{{ $propiedad->titulo }}</td>
                        <td>
                            <div><img src="../imagenes/{{ $propiedad->imagen }}" class="imagen-tabla"></div>
                        </td>
                        <td>${{ $propiedad->precio }}</td>
                        <td>{{ $propiedad->vendedores_id }}</td>
                        <td>
                            <form method="POST" class="w-100" action="/propiedades/eliminar">
                                <input type="hidden" name="id" value="{{ $propiedad->id }}">
                                <input type="hidden" name="tipo" value="propiedad">
                                <input type="submit" href="#" class="boton boton-rojo-block" value="Eliminar">
                            </form>
                            <a href="/propiedades/actualizar?id={{ $propiedad->id }}"
                                class="boton boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Vendedores</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody> <!-- Mostrar los resultados -->
                @foreach ($vendedores as $vendedor)
                    <tr>
                        <td>{{ $vendedor->id }}</td>
                        <td>{{ $vendedor->nombre . ' ' . $vendedor->apellido }}</td>
                        <td>{{ $vendedor->telefono }}</td>
                        <td>
                            <form method="POST" class="w-100" action="/vendedores/eliminar">
                                <input type="hidden" name="id" value="{{ $vendedor->id }}">
                                <input type="hidden" name="tipo" value="vendedor">
                                <input type="submit" class="boton boton-rojo-block" value="Eliminar">
                            </form>
                            <a href="/vendedores/actualizar?id={{ $vendedor->id }}"
                                class="boton boton-amarillo-block">Actualizar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
