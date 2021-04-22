<?php

use App\Http\Controllers\AuthPainelController;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/login', [AuthPainelController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('layouts.app');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::resource('categoria', CategoriaController::class)->except('show');
    Route::resource('caixa', CaixaController::class)->except('show');
    Route::resource('marca', MarcaController::class)->except('show');
    Route::resource('produto', ProdutoController::class)->except('show');
    
});

