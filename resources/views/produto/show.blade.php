@extends('layouts.page')

@section('page_title', 'Informações do produto')

@section('x_content')

    <div class="card border">
        <div class="card-body">
            <form action="{{ route ('produto.show', $produto->id)}}" method="POST">
                @method('GET')
                @csrf

                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route ('produto.index') }}" title="Go back"><i class="fas fa-backward "></i></a>
                </div>

                <div class="left_col" role="main">

                    <div class="page-title">
                        <div class="title_left">{{$produto->categoria->nome}}</div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>{{$produto->marca->nome}}</h2>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="col-md-7 col-sm-7 ">
                                            <div class="product-image">
                                                <img src="{{$produto->imagem}}" alt="..." />
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

                                            <h3 class="prod_title">{{$produto->nome}}</h3>
                                            <br><br>
                                            <h4 class="prod_codigo">Código: {{$produto->codigo}}</h4>
                                            <br>
                                            <h4 class="prod_estoque">Estoque:{{$produto->estoque}}</h4>
                                            <br><br>
                                            <div class="product_price">
                                                <h1>R$ {{$produto->valor}}</h1>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
