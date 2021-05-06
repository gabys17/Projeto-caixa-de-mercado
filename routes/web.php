<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaixaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthPainelController;

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

    Route::get('/', [DashboardController::class, 'redirectToIndex']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/home', [DashboardController::class, 'redirectToIndex'])->name('home');

    Route::resource('categoria', CategoriaController::class)->except('show');
    Route::resource('caixa', CaixaController::class)->except('show');
    Route::resource('marca', MarcaController::class)->except('show');
    Route::resource('produto', ProdutoController::class);


});

