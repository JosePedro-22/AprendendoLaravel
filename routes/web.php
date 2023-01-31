<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;
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

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoList'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('/remove', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
/*
Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show'); */
/* Route::get('/empresa', function () {
    return view('site/empresa');
}); */
/* Route::view('/empresa','site/empresa');

Route::any('/any', function () {
    return "permite toda de acesso http(get, post, put, delete)...";
});

Route::match(["put","delete"],'/match', function () {
    return "permite apenas acesso definido...";
});

Route::get('/produto/{id}/{cat?}', function ($id, $cat = '') {
    return "O id do produto é: ".$id."<br>"."<h2>A catergoria do produto é: </h2>".$cat;
}); */

/* Route::redirect('/welcome', '/empresa');

Route::get('/news',function(){
    return  view('site/news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
}); */

/* admin/ se repeti em todas as rotas... podemos deixar prefixado */
/* Route::group([
    'prefix' => 'admin', chave prefix
    'as' => 'admin.' chave informando o nome das rotas do grupo
    ], function () {

    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('help', function(){
        return "help";
    })->name('help');

    Route::get('sobre', function(){
        return "sobre";
    })->name('sobre');
});
 */
