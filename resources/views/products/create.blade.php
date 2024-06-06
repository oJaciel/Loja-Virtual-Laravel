@extends('crud_template')

@section('content')

<div class="card">

    <div class="card-header">
        <h2>Cadastro de Produto</h2>
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

        <form action="{{ url('products/new') }}" method="POST">
            @csrf
            <strong>Nome:</strong>
            <input class="form-control" name="name" type="text" />

            <strong>Descrição:</strong>
            <input class="form-control" name="description" type="textarea" />

            <strong>Quantidade:</strong>
            <input class="form-control" name="quantity" type="number" />

            <strong>Preço:</strong>
            <input class="form-control" name="price" type="number" />

            <strong>Tipo:</strong>
            <select class="form-control" name="type_id">
                @foreach ($types as $type)
                <option value=" {{ $type['id'] }} "> {{ $type['name'] }} </option>
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