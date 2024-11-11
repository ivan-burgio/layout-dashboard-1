<div class="w-full bg-gray-800 ">
    <div class="w-11/12 max-w-screen-xl mx-auto flex flex-row justify-between py-6">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a class="text-white font-bold uppercase md:flex md:items-center md:m-0" href="/">
                {{ $data['header']['title'] }}
            </a>

            <div class="flex items-center md:hidden">
                <div class="mobile-menu ml-4">
                    <img src="/img/barras.svg" alt="icono menu responsive" class="w-8 cursor-pointer">
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-between w-full md:w-auto">
            <nav class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 text-center p-2">
                <a href="/nosotros" class="text-white hover:text-green-500">Nosotros</a>
                <a href="/anuncios" class="text-white hover:text-green-500">Anuncios</a>
                <a href="/contacto" class="text-white hover:text-green-500">Contacto</a>
            </nav>
        </div>
    </div>
</div>
