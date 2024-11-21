@extends('layout')

@section('content')
    <main class="w-full p-8 mx-auto my-8">
        <h1 class="text-2xl font-bold text-center">Administrador de Bienes Raices</h1>

        <div class="flex space-x-4 mt-4">
            <a href="/propiedades/crear"
                class="bg-green-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-green-800">
                Nueva Propiedad
            </a>
            <a href="/vendedores/crear"
                class="bg-yellow-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-yellow-800">
                Nuevo/a Vendedor
            </a>
            <a href="/blogs/crear" class="bg-blue-800 text-white uppercase font-bold py-2 px-4 rounded hover:bg-blue-900">
                Nuevo blog
            </a>
        </div>

        <h2 class="text-xl font-semibold mt-8">Propiedades</h2>
        @if (!empty($data['propiedades']))
            <table class="w-full mt-8 border-collapse shadow-md">
                <thead>
                    <tr class="bg-green-700 text-white">
                        @foreach (array_keys($data['propiedades'][0]) as $header)
                            @if (!in_array($header, ['descripcion_larga', 'habitaciones', 'baños', 'estacionamientos', 'slug', 'imagen']))
                                <th class="px-6 py-4 text-center uppercase font-semibold">{{ ucfirst($header) }}</th>
                            @elseif ($header === 'descripcion_larga')
                                <th class="px-6 py-4 text-center uppercase font-semibold">Info</th>
                            @endif
                        @endforeach
                        <th class="px-6 py-4 text-center uppercase font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['propiedades'] as $propiedad)
                        <tr class="border-b border-gray-400 {{ $loop->even ? 'bg-gray-50' : '' }}">
                            @foreach ($propiedad as $key => $value)
                                @if (!in_array($key, ['habitaciones', 'baños', 'estacionamientos', 'slug', 'imagen']))
                                    @if ($key !== 'descripcion_larga')
                                        <td class="px-6 py-4 text-center">{{ $value }}</td>
                                    @else
                                        <td class="px-6 py-4 text-center">
                                            <span class="cursor-pointer" title="{{ $value }}">ℹ️</span>
                                        </td>
                                    @endif
                                @endif
                            @endforeach
                            <td class="px-6 py-4 flex justify-center space-x-2">
                                <form method="POST" action="/propiedades/eliminar" class="w-full">
                                    <input type="hidden" name="id" value="{{ $propiedad['id'] }}">
                                    <button type="submit" disabled
                                        class="bg-red-600 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-700 w-full cursor-pointer"><i
                                            class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                </form>
                                <a href="/propiedades/actualizar/{{ $propiedad['slug'] }}"
                                    class="bg-yellow-600 text-white uppercase font-bold py-2 px-4 rounded hover:bg-yellow-700 w-full text-center">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center text-gray-800 mt-4">No hay propiedades disponibles.</p>
        @endif

        <h2 class="text-xl font-semibold mt-8">Vendedores</h2>
        <table class="w-full mt-8 border-collapse shadow-md">
            <thead>
                <tr class="bg-green-700 text-white">
                    @foreach (array_keys($data['vendedores'][0]) as $header)
                        @if (!in_array($header, ['slug']))
                            <th class="px-6 py-4 text-center uppercase font-semibold">{{ ucfirst($header) }}</th>
                        @endif
                    @endforeach
                    <th class="px-6 py-4 text-center uppercase font-semibold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['vendedores'] as $vendedor)
                    <tr class="border-b border-gray-400 {{ $loop->even ? 'bg-gray-50' : '' }}">
                        @foreach ($vendedor as $key => $value)
                            @if (!in_array($key, ['slug']))
                                <td class="px-6 py-4 text-center">{{ $value }}</td>
                            @endif
                        @endforeach
                        <td class="px-6 py-4 flex justify-center space-x-2">
                            <form method="POST" action="" class="w-full">
                                <input type="hidden" name="id" value="{{ $vendedor['id'] }}">
                                <button type="submit" disabled
                                    class="bg-red-600 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-700 w-full cursor-pointer"><i
                                        class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                            </form>
                            <a href="/vendedores/actualizar/{{ $vendedor['slug'] }}"
                                class="bg-yellow-600 text-white uppercase font-bold py-2 px-4 rounded hover:bg-yellow-700 w-full text-center">
                                <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="text-xl font-semibold mt-8">Blogs</h2>
        @if (!empty($data['blogs']))
            <table class="w-full mt-8 border-collapse shadow-md">
                <thead>
                    <tr class="bg-green-700 text-white">
                        @foreach (array_keys($data['blogs'][0]) as $header)
                            @if (!in_array($header, ['descripcion_larga', 'habitaciones', 'baños', 'estacionamientos', 'slug', 'imagen']))
                                <th class="px-6 py-4 text-center uppercase font-semibold">{{ ucfirst($header) }}</th>
                            @elseif ($header === 'descripcion_larga')
                                <th class="px-6 py-4 text-center uppercase font-semibold">Info</th>
                            @endif
                        @endforeach
                        <th class="px-6 py-4 text-center uppercase font-semibold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['blogs'] as $blog)
                        <tr class="border-b border-gray-400 {{ $loop->even ? 'bg-gray-50' : '' }}">
                            @foreach ($blog as $key => $value)
                                @if (!in_array($key, ['habitaciones', 'baños', 'estacionamientos', 'slug', 'imagen']))
                                    @if ($key !== 'descripcion_larga')
                                        <td class="px-6 py-4 text-center">{{ $value }}</td>
                                    @else
                                        <td class="px-6 py-4 text-center">
                                            <span class="cursor-pointer" title="{{ $value }}">ℹ️</span>
                                        </td>
                                    @endif
                                @endif
                            @endforeach
                            <td class="px-6 py-4 flex justify-center space-x-2">
                                <form method="POST" action="" class="w-full">
                                    <input type="hidden" name="id" value="{{ $blog['id'] }}">
                                    <button type="submit" disabled
                                        class="bg-red-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-red-800 w-full cursor-pointer"><i
                                            class="fa-solid fa-trash" style="color: #ffffff;"></i></button>
                                </form>
                                <a href="/blogs/actualizar?id={{ $blog['id'] }}"
                                    class="bg-yellow-700 text-white uppercase font-bold py-2 px-4 rounded hover:bg-yellow-800 w-full text-center">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-left text-gray-800 mt-4">No hay blogs disponibles.</p>
        @endif
    </main>
@endsection
