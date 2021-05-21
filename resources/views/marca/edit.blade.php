@extends('layouts.page')

@section('page_title', 'Marcas - ediçao')

@section('x_content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route ('marca.update', $marca->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nomeMarca">Nome da Marca</label>
                <input type="text" class="form-control" name="nomeMarca" value="{{$marca->nome}}" id="nomeMarca"
                    placeholder="Nome da Marca">
            </div>
            <button type="submit" class="btn btn-sm btn-success">Save</button>
        </form>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route ('marca.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i></a>
        </div>
    </div>
</div>

@endsection
