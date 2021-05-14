<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Produto;
use App\Models\Caixa;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
    private $items;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caixas = Caixa::with('categoria', 'marca', 'produto')->paginate(100);

        $countCaixas = $caixas->count();

        return view('caixa.index', array(
            'caixas' => $caixas,
            'countCaixas' => $countCaixas,
        ));
    }

    public function create($produto_id, $quantity = null)
    {
        $produtos = Produto::select('id', 'nome')->get();
        $produtos = Produto::select('id', 'codigo')->get();
        $produtos = Produto::select('id', 'valor')->get();
        $produtos = Produto::select('id', 'estoque')->get();
        $produto_quantity = $this->items[$produto_id] ['quantity'] ?? null;

        $this->items[$produto_id] = [
            'produto_id' => $produto_id,
            'quantity' => $produto_quantity + ($quantity ?? 1),
        ];
        //$caixa = Caixa::select('id', 'quantidade')->get();

        return view('caixa.create', [
            'produtos' => $produtos
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
        $caixa = new Caixa();
        $caixa->produto_id = $request->input('nomeProduto');
        $caixa->produto_id = $request->input('valor');
        $caixa->produto_id = $request->input('valor_total');
        $caixa->produto_id = $request->input('codigo');
        $caixa->produto_id = $request->input('estoque');
        $caixa->produto_id = $request->input('file');
        $caixa->produto_id = $request->input('quantidade');

        $caixa->save();

        return redirect('caixa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function show(Caixa $caixa)
    {
        return redirect('produto.show');
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Caixa  $caixa
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Caixa $caixa)
    {
        // altera a quantidade do produto
    }

    public function destroy($id)
    {
        $caixa = Produto::find($id);
        if(isset($produto)){
            $produto->delete();
        }
        return redirect('caixa');
    }

    public function addItem($produto_id, $quantity = null)
    {
        $produto_quantity = $this->items[$produto_id] ['quantity'] ?? null;

        $this->items[$produto_id] = [
            'produto_id' => $produto_id,
            'quantity' => $produto_quantity + ($quantity ?? 1),
        ];
        dump($this->items);
    }

    public function removeItem($produto_id)
    {
        unset($this->items[$produto_id]);

        dump($this->items);

        // update item
    }

}
