<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::all();

        $countMarcas = count($marcas) > 0;

        return view('marca.index', array(
            'marcas' => $marcas,
            'countMarcas' => $countMarcas
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->nome = $request->input('nomeMarca');
        $marca->save();
        return redirect('marca');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::find($id);
        if(isset($marca)){
            return view('marca.edit', compact('marca'));
        }
        return redirect('marca.index');
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
        $marca = Marca::find($id);
        if(isset($marca)){
            $marca->nome = $request->input('nomeMarca');
            $marca->save();

            return redirect()->route('marca.index')
                ->with('success', 'Marca criada com sucesso.');

        }
        else{
            return redirect()->route('marca.index')
                ->with('error', 'A marca nao foi criada.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $id)
    {
        $marca = Marca::find($id);
        if(isset($marca)){
            $marca->delete();
        }
        return redirect('marca');
    }
}
