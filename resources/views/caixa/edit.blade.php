@extends('layouts.app')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('caixa.update', $caixa->id)}}" method="POST">
            @method('PUT')
            @csrf
                <div class="form-group">
                <label for="CPF_na_nota">CPF na nota</label>
                <input type="text" class="form-control" name="CPF_na_nota" value="{{$caixa->CPF_na_nota}}" id="CPF_na_nota"
                    placeholder="CPF_na_nota">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="{{$categoria->nome}}" id="nomeCategoria"
                    placeholder="categoria">
            </div>
            <div class="form-group">
                <label for="nomeMarca">Marca</label>
                <input type="text" class="form-control" name="marca" value="{{$marca->nome}}" id="nomeMarca"
                    placeholder="marca">
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
            <div class="form-group">
                <label for="desconto">Desconto</label>
                <input type="number" class="form-control" name="desconto" value="{{$caixa->desconto}}" id="desconto"
                    placeholder="Desconto">
            </div>
            <div class="form-group">
                <label for="valor_total">Valor total</label>
                <input type="number" class="form-control" name="valor_total" value="{{$caixa->valor_total}}" id="valor_total"
                    placeholder="Valor total">
            </div>
            <div class="form-group">
                <label for="valor_total_desconto">Valor total desconto</label>
                <input type="number" class="form-control" name="valor_total_desconto" value="{{$caixa->valor_total_desconto}}" id="valor_total_desconto"
                    placeholder="valor_total_desconto">
            </div>
            <div class="form-group">
                <label for="dt_inicio">Data de início</label>
                <input type="number" class="form-control" name="dt_inicio" value="{{$caixa->dt_inicio}}" id="dt_inicio"
                    placeholder="Data de início">
            </div>
            <div class="form-group">
                <label for="dt_fim">Data final</label>
                <input type="number" class="form-control" name="dt_fim" value="{{$caixa->dt_fim}}" id="dt_fim"
                    placeholder="Data final">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('marca.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>
