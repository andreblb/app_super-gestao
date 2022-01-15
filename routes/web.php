<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return "Estou funcionando";
});
*/
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos']);

Route::get('/login', function(){return 'Login';});

route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return 'Clientes';})->name('app.cliente');

    Route::get('/fornecedor',[FornecedorController::class, 'index'])->name('app.forncedor');

    Route::get('/produtos', function(){return 'Produtos';})->name(('app.produtos'));

});


Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste']) -> name('site.teste');

/*Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function(String $nome, String $categoria, String $assunto, String $mensagem) {
    echo "estamos aqui: $nome - $categoria - $assunto - $mensagem";
});*/

Route::get(
    '/contato/{nome}/{contato_id}',
    function(string $nome = 'Desconhecido',int $contato_id = 1){
        echo "estamos aqui agora: $nome - $contato_id";
    })->where('contato_id','[0-9]+')->where('nome','[A-Za-z]+');

Route::get(
    '/contato/{nome}/{contato_id?}',
    function(string $nome = 'Desconhecido',$contato_id = 'sem contato'){
        echo "estamos aqui agora: $nome - $contato_id";
    })->where('nome','[A-Za-z]+');

    Route::fallback(function (){
        echo "A routa especificada não existe";
    });
