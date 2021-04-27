@extends('layouts.app')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('marca.update', $marca->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <select type="text" class="form-control" name="categoria" value="{{$categoria->nome}}" id="nomeCategoria"
                    placeholder="categoria">
            </div>
            <div class="form-group">
                <label for="nomeMarca">Nome da Marca</label>
                <select type="text" class="form-control" name="nomeMarca" value="{{$marca->nome}}" id="nomeMarca"
                    placeholder="Nome da Marca">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" value="{{$produto->nome}}" id="nomeProduto"
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
                <label for="codigo">Imagem</label>
                <input type="text" class="form-control" name="imagem" value="{{$produto->imagem}}" id="imagem"
                    placeholder="imagem">
            </div>
            <div class="form-group">
                <label for="nomeProduto">Estoque</label>
                <input type="number" class="form-control" name="estoque" value="{{$produto->estoque}}" id="estoque"
                    placeholder="Nome do produto">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('marca.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>
