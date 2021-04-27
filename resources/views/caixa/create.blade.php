@extends('layouts.app')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('produto.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="CPF_na_nota">CPF na nota</label>
                <input type="text" class="form-control" name="CPF_na_nota" id="CPF_na_nota"
                    placeholder="CPF_na_nota" required>
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="nomeCategoria"
                    placeholder="categoria" required>
            </div>
            <div class="form-group">
                <label for="nomeMarca">Marca</label>
                <input type="text" class="form-control" name="marca" id="nomeMarca"
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
            <div class="form-group">
                <label for="desconto">Desconto</label>
                <input type="number" class="form-control" name="desconto" id="desconto"
                    placeholder="Desconto" required>
            </div>
            <div class="form-group">
                <label for="valor_total">Valor total</label>
                <input type="number" class="form-control" name="valor_total" id="valor_total"
                    placeholder="Valor total" required>
            </div>
            <div class="form-group">
                <label for="valor_total_desconto">Valor total desconto</label>
                <input type="number" class="form-control" name="valor_total_desconto" id="valor_total_desconto"
                    placeholder="valor_total_desconto" required>
            </div>
            <div class="form-group">
                <label for="dt_inicio">Data de início</label>
                <input type="number" class="form-control" name="dt_inicio" id="dt_inicio"
                    placeholder="Data de início" required>
            </div>
            <div class="form-group">
                <label for="dt_fim">Data final</label>
                <input type="number" class="form-control" name="dt_fim" id="dt_fim"
                    placeholder="Data final" required>
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('produto.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>