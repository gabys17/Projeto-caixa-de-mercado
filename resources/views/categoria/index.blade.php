@extends('layouts.page')

@section('page_title', 'Categorias')

@section('x_content')
<div class="card border">
    <div class="card-body">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route ('categoria.create') }}" title="Crie uma categoria"><i class="fas fa-plus-circle"></i>
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if ($countCategorias)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <body>
                    @foreach ($categorias as $index=>$categoria)
                    <tr>
                        <td>{{ $categoria->nome }}</td>
                        <td>
                            <a href="{{ route ('categoria.edit', $categoria->id)}}" class="btn btn-sn btn-warning">Editar</a><i
                                class="fas fa-edit"></i>
                            <br>
                            <form action="{{route('categoria.destroy', [$categoria->id])}}" method="POST">
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