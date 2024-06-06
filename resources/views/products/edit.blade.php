<x-app-layout>



    <div class="px-6 mx-auto max-w-7xl">

        <h2>Edição de Produto</h2>

        <form action="{{ url('products/update') }}" method="POST">
            @csrf
            <!-- campo oculto passando o ID como parâmetro no request -->
            <input type="hidden" name="id" value="{{ $product['id'] }}">

            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$product->name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="description" :value="__('Descrição')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$product->description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="quantity" :value="__('Quantidade')" />
                <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" :value="$product->quantity" />
                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="price" :value="__('Preço')" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="$product->price" />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <strong>Tipo:</strong>
            <select class="form-control" name="type_id">
                @foreach ($types as $type)
                <option {{ $product->type_id == $type->id ? "selected" : "" }} value=" {{ $type['id'] }} "> {{ $type['name'] }} </option>
                @endforeach
            </select>

            <div class="row mt-3">
                <div class="col">
                    <a class="btn btn-secondary" href=" {{ url('/products') }} ">Voltar</a>
                </div>
                <div class="col text-end">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
            </div>

        </form>

    </div>

</x-app-layout>