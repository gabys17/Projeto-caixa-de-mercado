@extends('layouts.page')

@section('page_title', 'Marcas - criar')

@section('x_content')

<div class="card border">
    <div class="card-body">
        <form action="{{ route('marca.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeMarca">Nome da Marca</label>
                <input type="text" class="form-control" name="nomeMarca" id="nomeMarca"
                    placeholder="Nome da Marca" required>
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
