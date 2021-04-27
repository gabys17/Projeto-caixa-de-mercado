@extends('layouts.page')

@section('page_title', 'Produtos')

@section('x_content')

<div class="card border">
    <div class="card-body">
        <h2 class="card-title">Produtos</h2>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route ('produto.create') }}" title="Crie um produto"><i class="fas fa-plus-circle"></i>
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if ($produtos)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Marca</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Código</th>
                        <th>Imagem</th>
                        <th>Estoque</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <body>
                    @foreach ($produtos as $index=>$produto)
                    <tr>
                        <td>{{ $produto->categoria->nomeCategoria }}</td>
                        <td>{{ $produto->marca->nomeMarca }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->codigo }}</td>
                        <td>{{ $produto->imagem }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>
                            <a href="{{ route ('produto.edit', $produto->id)}}" class="btn btn-sn btn-warning">Editar</a><i
                                class="fas fa-edit"></i>
                            <br>
                            <form action="{{route('produto.destroy', [$produto->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sn btn-danger">Deletar</button> <i
                                    class="fas fa-trash"></i>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </body>
            </table>
        @endif
    </div>
</div>
@endsection
