@extends('layouts.page')

@section('page_title', 'Caixa')

@section('x_content')
<div class="card border">
    <div class="card-body">
        <h2 class="card-title">Caixa</h2>


        @if ($caixas)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>CPF_na_nota</th>
                        <th>nomeCategoria</th>
                        <th>nomeMarca</th>
                        <th>NomeProduto</th>
                        <th>Valor</th>
                        <th>Código</th>
                        <th>Imagem</th>
                        <th>Estoque</th>
                        <th>Desconto</th>
                        <th>valor_total</th>
                        <th>valor_total_desconto</th>
                        <th>dt_inicio</th>
                        <th>dt_fim</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <body>
                    @foreach ($caixas as $index=>$caixa)
                    <tr>
                        <td>{{ $caixa->CPF_na_nota }}</td>
                        <td>{{ $categoria->nomeCategoria }}</td>
                        <td>{{ $marca->nomeMarca }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->codigo }}</td>
                        <td>{{ $produto->imagem }}</td>
                        <td>{{ $produto->estoque }}</td>
                        <td>{{ $caixa->desconto }}</td>
                        <td>{{ $caixa->valor_total }}</td>
                        <td>{{ $caixa->valor_total_desconto }}</td>
                        <td>{{ $caixa->dt_inicio }}</td>
                        <td>{{ $caixa->dt_fim }}</td>
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