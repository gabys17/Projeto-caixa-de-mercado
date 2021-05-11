@extends('layouts.page')

@section('page_title', 'Caixa')

@section('x_content')

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-4 font-bold">Nome do produto</div>
            <div class="col-8 font-bold">Marca e categoria</div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('imagens/talher.jpeg') }}" alt="Imagem do produto" class="responsive">
            </div>
            <div class="col-3">
                <div class="row">
                    <fieldset disabled>
                        <legend class="mb-0">Código</legend>
                        <div class="m-0 mb-1">
                          <input type="text" id="disabledTextInput" class="form-control" value="789">
                        </div>

                        <legend class="mb-0">Código</legend>
                        <div class="m-0 mb-1">
                          <input type="text" id="disabledTextInput" class="form-control" value="789">
                        </div>

                        <legend class="mb-0">Código</legend>
                        <div class="m-0 mb-1">
                          <input type="text" id="disabledTextInput" class="form-control" value="789">
                        </div>

                    </fieldset>
                </div>
            </div>
            <div class="col-6">
                <div class="w-100">
                    <table class="w-100 cupom-fiscal">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Código</th>
                                <th>Quantidade</th>
                                <th>Valor unitário</th>
                                <th>Valor total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( range(1,10) as $i)

                            <tr>
                                <td class="align-center">{{ $i }}</td>
                                <td class="align-center">produto</td>
                                <td class="align-center">168596</td>
                                <td class="align-center">42</td>
                                <td class="align-center">56</td>
                                <td class="align-center">12</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-6">
                <button class="btn btn-warning">Nova venda (F2)</button>
                <button class="btn btn-warning">Editar (F3)</button>
                <button class="btn btn-warning">Cancelar (F4)</button>
                <button class="btn btn-warning">Finalizar (F8)</button>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="w-100">Desconto</div>
                        <div class="w-100">€ 0.00</div>
                    </div>
                    <div class="col-6">
                        <div class="w-100">Valor total</div>
                        <div class="w-100">€ 0.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-12">Ajuda (F1)</div>
        </div>
    </div>
</div>

@endsection
