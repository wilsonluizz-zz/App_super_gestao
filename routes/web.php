<?php

use App\Http\Controllers\sobreNosController;
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

Route::get('/',[App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobrenos', [App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function(){return 'login';})->name('site.login');

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});

route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});



