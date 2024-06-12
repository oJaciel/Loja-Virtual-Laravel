<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800">
            Lista de Tipos
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($message = Session::get('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">{{ $message }}</strong>
                </div>
            @endif

            <a href="{{ url('/types/new') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Adicionar Tipo</a>

            <x-content-div>
                <table class="min-w-full divide-y">
                    <thead class="bg-gray-50">
                        <tr>
                            <x-table-label :value="__('Nome')"></x-table-label>
                            <x-table-label></x-table-label>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($types as $type)
                            <tr>
                                <x-table-content>{{ $type['name'] }}</x-table-content>
                                
                                <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                    <a href="{{ url('/types/update', ['id' => $type->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                    <a href="{{ url('/types/delete', ['id' => $type->id]) }}"
                                        class="text-red-600 hover:text-red-900" onclick="return confirm('Confirmar exclusão?')">Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-content-div>

            <a href="{{ url('/dashboard') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 my-4 rounded text-center">Voltar</a>
        </div>
    </div>

</x-app-layout>
