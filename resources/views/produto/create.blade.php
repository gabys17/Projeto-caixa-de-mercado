@extends('layouts.page')


@section('page_title', 'Produtos')

@section('x_content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('produto.store')}}" method="POST">
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
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor do produto</label>
                <input type="number" class="form-control" name="valor" id="valor" min="0.00" max="10000.00" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" class="form-control" name="codigo" id="codigo" required>
            </div>
            <div class="form-group">
                <label for="imagens">Imagem</label>
                    <input type="file" required name="file">
                    <input type="submit">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Estoque</label>
                <input type="number" class="form-control" name="estoque" id="estoque" min="0" max="10000" step="0.01" required>
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
