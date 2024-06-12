<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <!-- Cabeçalho -->
    <div class="px-6 mx-auto max-w-8xl">
        <header class="flex items-center justify-between py-4 bg-white shadow-md rounded-lg px-6">

            <a class="flex items-center" href="{{ url('/') }}">
                <img src="https://upf.br//_uploads/Conteudo/comunicacao/marca/logo-pb-vertical.png" alt="Logo"
                    class="h-10 mr-3">
                <h2 class="font-semibold text-2xl text-gray-800">
                    Loja do Tópicos
                </h2>
            </a>

            <div>
                <a class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest transition ease-in-out duration-150"
                    href="{{ url('login') }}">Ir para login</a>
                <a class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"
                    href="{{ url('register') }}">Cadastre-se</a>
            </div>
        </header>

        <!-- Filtro por tipo de produto -->
        <div class="my-4 py-4 bg-white shadow-md rounded-lg px-6">

            <p class="text-center text-lg font-semibold mb-4 ">Tipos de Produtos</p>

            @foreach ($types as $type)
                <a href="{{ route('filterProduct', $type->id) }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest transition ease-in-out duration-150">{{ $type->name }}</a>
            @endforeach

        </div>

        <!-- Produtos -->
        <div>
            <h3 class="text-2xl text-center font-semibold my-4">Lista de Produtos</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @foreach ($products as $product)
                    <div class="bg-white p-5 rounded-lg shadow-md">
                        <!-- Coluna da Imagem -->
                        <div class="grid grid-cols-2">
                            <img src="https://www.mobismea.com/upload/iblock/2a0/2f5hleoupzrnz9o3b8elnbv82hxfh4ld/No%20Product%20Image%20Available.png">

                            <!-- Coluna das informações -->
                            <div class="ml-2">
                                <h4 class="font-semibold text-xl mb-2">{{ $product->name }}</h4>
                                <p class="text-gray-700 mb-4"> <b>Descrição:</b> {{ $product->description }}</p>
                                <p class="text-gray-800 font-semibold">Em estoque: {{ $product->quantity }} un</p>
                                <p class="text-gray-800 font-semibold">Preço: R$
                                    {{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
</body>

</html>
