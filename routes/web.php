<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {
    return "Estou funcionando";
});
*/
Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobrenos', [SobreNosController::class, 'sobreNos']);
