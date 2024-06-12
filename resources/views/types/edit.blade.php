<x-app-layout>

    <div class="px-6 mx-auto max-w-7xl">
        <x-slot name="header">
            <h2 class="font-semibold text-2xl text-gray-800">
                Edição de Tipo
            </h2>
        </x-slot>

        <x-content-div>
            <form class="mt-4" action="{{ url('types/update') }}" method="POST">
                @csrf
                <!-- campo oculto passando o ID como parâmetro no request -->
                <input type="hidden" name="id" value="{{ $type['id'] }}">

                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$type->name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                <div class="grid grid-cols-2 gap-4 mt-3">
                    <button class="text-start">
                        <a class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" href="{{ url('/types') }}">Voltar</a>
                    </button>
                    <div class="text-end">
                        <x-primary-button>Salvar</x-primary-button>
                    </div>
                </div>
        </x-content-div>

        </form>
    </div>

</x-app-layout>