<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guarda os produtos no carrinho
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function show(Caixa $caixa)
    {
        // mostrar produto para consulta de valor e outras infos
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
}
