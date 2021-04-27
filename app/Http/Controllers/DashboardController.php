<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (Request $request)
    {
        /*
        Camelcase umaFuncaoAqui
        uppercamelcase UmaClasseAqui
        snakecase uma_variavel_aqui - nome de arquivos
        lowercase gabriela - variaveis
        uppercase GABRIELA - constantes
        */

        return view('dashboard.index');


    }

    function redirectToIndex (Request $request)
    {
        return redirect()->route('dashboard');
    }

}
