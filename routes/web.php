<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;

//rotas de produtos
Route::get('/produtos', [ProdutoController::class, 'index']);     
Route::get('/produtos/{id}', [ProdutoController::class, 'show']); 
Route::post('/produtos', [ProdutoController::class, 'store']);   
Route::put('/produtos/{id}', [ProdutoController::class, 'update']); 
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']); 

//rotas de usuarios
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy']);

//rotas de categorias
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy']);