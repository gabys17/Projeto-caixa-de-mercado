<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $produtos = Produto::with('categoria', 'marca')->paginate(100);

        $countProdutos = $produtos->count();

        return view('produto.index', array(
            'produtos' => $produtos,
            'countProdutos' => $countProdutos,
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::select('id', 'nome')->get();
        $marcas = Marca::select('id', 'nome')->get();

        return view('produto.create', [
            'categorias' => $categorias,
            'marcas' => $marcas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->input('nomeProduto');
        $produto->valor = $request->input('valor');
        $produto->codigo = $request->input('codigo');
        $produto->imagem = $request->input('imagem');
        $produto->estoque = $request->input('estoque');
        $produto->categoria_id = $request->input('nomeCategoria');//valor do name na view - input formulario
        $produto->marca_id = $request->input('nomeMarca');
        $produto->save();
        return redirect('produto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorias = Categoria::select('id', 'nome')->get();
        $marcas = Marca::select('id', 'nome')->get();

        return view('produto.show', [
            'produto' => Produto::findOrFail($id),
            'categorias' => $categorias,
            'marcas' => $marcas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::select('id', 'nome')->get();
        $marcas = Marca::select('id', 'nome')->get();

        $produto = Produto::find($id);
        if(isset($produto)){
            return view('produto.edit', compact('produto'), [
            'categorias' => $categorias,
            'marcas' => $marcas,
            ]);
        }
        return redirect('produto.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->nome = $request->input('nomeProduto');
            $produto->valor = $request->input('Valor');
            $produto->codigo = $request->input('codigo');
            $produto->imagem = $request->input('imagem');
            $produto->estoque = $request->input('estoque');
            $produto->save();

            return redirect()->route('produto.index')
                ->with('success', 'produto criado com sucesso.');

        }
        else{
            return redirect()->route('produto.index')
                ->with('error', 'O produto nao foi criada.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::find($id);
        if(isset($produto)){
            $produto->delete();
        }
        return redirect('produto');
    }
}
