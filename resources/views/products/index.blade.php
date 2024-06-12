<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800">
            Lista de Produtos
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                <strong class="font-bold">{{ $message }}</strong>
            </div>
            @endif

            <x-primary-button>
            <a href="{{ url('/products/new') }}">Adicionar Produto</a>
            </x-primary-button>

            <x-content-div>
                <table class="min-w-full divide-y">
                    <thead class="bg-gray-50">
                        <tr>
                            <x-table-label :value="__('Nome')"></x-table-label>
                            <x-table-label :value="__('Estoque (un)')"></x-table-label>
                            <x-table-label :value="__('Preço (R$)')"></x-table-label>
                            <x-table-label></x-table-label>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($products as $product)
                        <tr>
                            <x-table-content>{{ $product['name'] }}</x-table-content>
                            <x-table-content>{{ $product['quantity'] }}</x-table-content>
                            <x-table-content>{{ $product['price'] }}</x-table-content>
                            <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                <x-secondary-button>
                                    <a href="{{ url('/products/update', ['id' => $product->id]) }}">Editar</a>
                                </x-secondary-button>
                                <x-danger-button>
                                    <a href="{{ url('/products/delete', ['id' => $product->id]) }}" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
                                </x-danger-button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-content-div>

            <x-secondary-button>
                <a href="{{ url('/dashboard') }}">Voltar</a>
            </x-secondary-button>
        </div>
    </div>

</x-app-layout>