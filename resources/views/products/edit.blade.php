<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #e2e2e2;">

    <div class="container mt-2">
        <div class="col">
            <div class="row">

                <div class="card">

                    <div class="card-header">
                        <h2>Edição de Produto</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Problemas com seus dados</strong>
                                    <br>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>

                        <form action="{{ url('products/update') }}" method="POST">
                            @csrf
                            <!-- campo oculto passando o ID como parâmetro no request -->
                            <input type="hidden" name="id" value="{{ $product['id'] }}">
                    
                            <strong>Nome:</strong>
                            <input class="form-control" name="name" type="text" value="{{ $product['name'] }}" />
                    
                            <strong>Descrição:</strong>
                            <input class="form-control" name="description" type="textarea" value="{{$product['description'] }}" />
                    
                            <strong>Quantidade:</strong>
                            <input class="form-control" name="quantity" type="number" value="{{ $product['quantity']}}" />
                    
                            <strong>Preço:</strong>
                            <input class="form-control" name="price" type="number" value="{{ $product['price'] }}" />
                    
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

                </div>

            </div>
        </div>
        
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>