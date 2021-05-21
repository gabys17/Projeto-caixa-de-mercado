@extends('layouts.page')

@section('page_title', 'Produtos - ediçao')

@section('x_content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('produto.update', $produto->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <select class="form-select" name="nomeCategoria" aria-label="Qual é a categoria?">
                    <option selected>Selecione a categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="form-select" name="nomeMarca" aria-label="Qual é a marca?">
                    <option selected>Selecione a marca</option>
                    @foreach ($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" value="{{$produto->nome}}" id="nome"
                    placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="valor">Valor do produto</label>
                <input type="number" class="form-control" name="valor" value="{{$produto->valor}}" id="valor"
                    placeholder="Nome do produto">
            </div>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" class="form-control" name="codigo" value="{{$produto->codigo}}" id="codigo"
                    placeholder="imagem">
            </div>
            <div class="form-group">
                <label for="Picture">Insert the product's picture here</label>
                <input type="file" id="myFile" name="filename" value="{{$produto->imagem}}">
                <input type="submit">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Estoque</label>
                <input type="number" class="form-control" name="estoque" value="{{$produto->estoque}}" id="estoque"
                    placeholder="Nome do produto">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('produto.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>

@endsection
