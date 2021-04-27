@extends('layouts.app')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('produto.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Categoria</label>
                <select type="text" class="form-control" name="categoria" id="nomeCategoria"
                    placeholder="categoria" required>
            </div>
            <div class="form-group">
                <label for="nomeMarca">Marca</label>
                <select type="text" class="form-control" name="marca" id="nomeMarca"
                    placeholder="marca" required>
            </div>
            <div class="form-group">
                <label for="nomeProduto">Nome do produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto"
                    placeholder="Nome do produto" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor do produto</label>
                <input type="number" class="form-control" name="valor" id="valor"
                    placeholder="Nome do produto" required>
            </div>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" class="form-control" name="codigo" id="codigo"
                    placeholder="imagem" required>
            </div>
            <div class="form-group">
                <label for="codigo">Imagem</label>
                <input type="text" class="form-control" name="imagem" id="imagem"
                    placeholder="imagem" required>
            </div>
            <div class="form-group">
                <label for="nomeProduto">Estoque</label>
                <input type="number" class="form-control" name="estoque" id="estoque"
                    placeholder="Nome do produto" required>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('produto.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>