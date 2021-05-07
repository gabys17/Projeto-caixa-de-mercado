@extends('layouts.page')

@section('page_title', 'Caixa')

@section('x_content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Caixa<small> Aberto</small></h3>
        </div>

      <div class="clearfix"></div>

      <div class="row" style="display: block;">
        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Produto<small>Categoria e Marca</small></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class=" mt-2 mb-2 form-label-left input_mask">
                    <div class="form-group row">
                        <h4>Imagem</h4>
                        {{-- {{$produto->imagem}} --}}
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <h4>Código</h4>
                        {{-- <h4 class="prod_codigo">Código: {{$produto->codigo}}</h4> --}}
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        {{-- <h4 class="prod_estoque">Estoque:{{$produto->estoque}}</h4> --}}
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="number" class="form-control has-feedback-left" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <h4>valor</h4>
                        {{-- <h1>R$ {{$produto->valor}}</h1> --}}
                    </div>
                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <data type="text" class="form-control" id="valor total produto" placeholder="Valor total deste produto">
                            <h4>Valor total do produto</h4>
                    </div>
                </form>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>CPF na nota</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <input type="text">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control has-feedback-left" placeholder="Data inicial">
                <input type="text" class="form-control has-feedback-right" placeholder="Data final">
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control has-feedback-right" placeholder="Data final">
            </div>
            <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="">
                            <button type="button" class="btn btn-primary">Nova
                                venda</button>
                            <button type="reset" class="btn btn-primary">Alterar
                                venda</button>
                            <button type="submit" class="btn btn-success">Finalizar
                                venda</button>
                            <button type="submit" class="btn btn-success">Cancelar
                                venda</button>
                        </div>
                    </div>
                </div>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Hover rows <small>Try hovering over the rows</small></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form class="form-horizontal form-label-left">

                    <div type="number" class="form-group row">
                        <label class="control-label">Subtotal</label>
                        <data type="number" class="form-control" placeholder="Default Input">
                    </div>
                    <div class="form-group row ">
                        <label class="control-label">Desconto %</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group row ">
                        <label class="control-label">Total com desconto</label>
                        <data type="number" class="form-control" placeholder="Default Input">
                    </div>
                    <div class="form-group row ">
                        <label class="control-label">Valor recebido</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group row ">
                        <label class="control-label ">Troco</label>
                        <data type="number" class="form-control" placeholder="Default Input">
                    </div>
                    <div class="row">
                        <div class="form-group col-3">
                            <input type="text" class="form-control has-feedback-left" placeholder="Data inicial">
                        </div>
                        <div class="form-group col-3">
                            <input type="text" class="form-control has-feedback-right" placeholder="Data final">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Listagem de produtos</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($caixas)
                    <table class="table table-ordered table-hover">
                        <thead>
                            <tr>
                                <th>Nº item</th>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Quantidade</th>
                                <th>Valor unitário</th>
                                <th>valor total</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($caixas as $index=>$caixa)
                            <tr>
                                <td>Nº</td>
                                <td>{{ $caixa->produto->codigo }}</td>
                                <td>{{ $caixa->produto->nome }}</td>
                                <td>{{ $caixa->produto->quantidade }}</td>
                                <td>{{ $caixa->produto->valor }}</td>
                                <td>{{ $caixa->valor_total }}</td>
                                </form>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                @endif
            </div>
          </div>
        </div>

        <div class="clearfix"></div>

      </div>
    </div>
  </div>

@endsection
