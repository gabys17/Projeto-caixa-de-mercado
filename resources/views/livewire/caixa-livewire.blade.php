
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <h1>Nome do produto</h1>
            </div>
            <div class="col-6">
                <h2>Marca <small> Categoria</small></h2>
            </div>
            <div class="col-3 pull-right">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código do produto"
                        wire:model="produto_codigo" wire:keydown.enter="addItemByCodigo()">
                    <input type="number" class="form-control" placeholder="Quantidade"
                        wire:model="produto_quantidade" wire:keydown.enter="addItemByCodigo()">
                    <div class="input-group-append">
                        <button class="btn btn-success" title="Adicione o produto" type="button" wire:click="addItemByCodigo()">
                            <i class="fas fa-plus-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
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
                          <input type="text" id="disabledTextInput" name="codigo" class="form-control" value="789">
                        </div>

                        <legend class="mb-0">Quantidade</legend>
                        <div class="m-0 mb-1">
                          <input type="number" id="number" name="quantidade" class="form-control" value="0">
                        </div>

                        <legend class="mb-0">Valor unitario</legend>
                        <div class="m-0 mb-1">
                          <input type="text" id="disabledTextInput" class="form-control" value="789">
                        </div>

                        <legend class="mb-0">Estoque</legend>
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
                                <th style="text-align:center">#</th>
                                <th style="text-align:center">Nome</th>
                                <th style="text-align:center">Código</th>
                                <th style="text-align:center">Quantidade</th>
                                <th style="text-align:center">Valor unitário</th>
                                <th style="text-align:center">Valor total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $items as $key => $item)
                            <tr class="{{ $produto_ultimo_codigo == ($item['produto']['codigo'] ?? null) ? 'text-succes font-weight-bold' : '' }}">
                                <td style="text-align:center">{{ $key }}</td>
                                <td style="text-align:center">{{ $item['produto']['nome'] ?? null }}</td>
                                <td style="text-align:center">{{ $item['produto']['codigo'] ?? null }}</td>
                                <td style="text-align:center">{{ $item['quantidade'] }}</td>
                                <td style="text-align:center">{{ $item['produto']['valor'] ?? 0 }}</td>
                                <td style="text-align:center">{{ ($item['produto']['valor'] ?? 0) * $item['quantidade'] }}</td>
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
            <div class="col-6 mt-2">
                <button class="btn btn-warning">Nova venda (F2)</button>
                <button class="btn btn-warning">Editar (F3)</button>
                <button class="btn btn-warning">Cancelar (F4)</button>
                <button class="btn btn-warning">Finalizar (F8)</button>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <legend class="mb-0">Desconto</legend>
                        <div class="m-0 mb-1">
                          <input type="number" id="number" name="desconto" class="form-control" value="0">
                        </div>
                    </div>
                    <div class="col-6">
                        <legend class="mb-0">Valor Total</legend>
                        <div class="m-0 mb-1">
                          <input type="text" id="disabledTextInput" name="valor_total" class="form-control" value="">
                        </div>
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
