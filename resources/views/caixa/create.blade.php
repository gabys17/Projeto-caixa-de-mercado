@extends('layouts.page')

@section('page_title', 'Informações do produto')

@section('x_content')

    <div class="card border">
        <div class="card-body">
            <form action="{{ route ('caixa.store')}}" method="POST">
                @method('GET')
                @csrf
                <div class="form-group">
                    <input type="number" class="form-select" name="codigoProduto" aria-label="Adicione aqui">
                        <option selected>Insira o código do poduto</option>
                        @foreach ($produtos as $produto)
                            <option value="{{$produto->id}}">{{$produto->codigo}}</option>
                        @endforeach
                </div>
                <button type="submit" class="btn btn-sm btn-success">Save</button>
            </form>
        </div>
    </div>

@endsection
