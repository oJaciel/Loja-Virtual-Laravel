<x-app-layout>

    <div class="px-6 mx-auto max-w-7xl">
        <p class="text-2xl text-center mt-3">Edição de Produto</p>

        <form action="{{ url('products/update') }}" method="POST">
            @csrf
            <!-- campo oculto passando o ID como parâmetro no request -->
            <input type="hidden" name="id" value="{{ $product['id'] }}">

            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$product->name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <x-input-label for="description" :value="__('Descrição')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                :value="$product->description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />

            <x-input-label for="quantity" :value="__('Quantidade')" />
            <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="$product->quantity" />
            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />

            <x-input-label for="price" :value="__('Preço')" />
            <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$product->price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />

            <label for="type" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Tipo</label>
            <select id="type" name="type_id"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                @foreach ($types as $type)
                    <option {{ $product->type_id == $type->id ? 'selected' : '' }} value=" {{ $type['id'] }} ">
                        {{ $type['name'] }} </option>
                @endforeach
            </select>

            <div class="grid grid-cols-2 gap-4 mt-3">
                <button class="text-start">
                <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded text-center"
                    href="{{ url('/products') }}">Voltar</a>
                </button>
                <div class="text-end">
                    <button class="text-end bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        type="submit">Salvar</button>
                </div>
            </div>
            

        </form>
    </div>

</x-app-layout>
