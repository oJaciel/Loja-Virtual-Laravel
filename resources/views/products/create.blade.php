<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>

<body>
    <form action="{{ url('products/new') }}" method="POST">
        @csrf
        <label>Nome:</label><br>
        <input name="name" type="text" /><br>

        <label>Descrição:</label><br>
        <input name="description" type="textarea" /><br>

        <label>Quantidade:</label><br>
        <input name="quantity" type="number" /><br>

        <label>Preço:</label><br>
        <input name="price" type="number" /><br>

        <label>Tipo:</label><br>
        <select name="type_id">
            @foreach ($types as $type)
            <option value=" {{ $type['id'] }} "> {{ $type['name'] }} </option>
            @endforeach 
        </select>
        <br>
        <input type="submit" value="Salvar" />
    </form>

</body>

</html>