<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    
    <h3>Lista de Produtos</h3>

    <a href="{{ url('/products/new') }}">Adicionar Produto</a>

    <ul>
        
        @foreach ($products as $product)
            <li>{{ $product['name'] }} {{ $product['price'] }}</li>
        @endforeach

    </ul>

</body>
</html>