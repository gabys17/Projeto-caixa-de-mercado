@extends('layouts.app')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('categoria.update', $categoria->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria" value="{{$categoria->nome}}" id="nomeCategoria"
                    placeholder="Nome da Categoria">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('categoria.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>