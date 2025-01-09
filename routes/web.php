<?php

use Illuminate\Support\Facades\Route;

//controllers
use App\Http\Controllers\UsuarioControler;

//rotas
Route::get('/', [UsuarioControler::class, 'cadastro'])->name('cadastro');
Route::post('/', [UsuarioControler::class, 'cadastroPost'])->name('cadastro');
Route::get('/listar', [UsuarioControler::class, 'listar'])->name('listar');
Route::get('/editar/{id?}', [UsuarioControler::class, 'editar'])->name('editar');
Route::post('/editar/{id?}', [UsuarioControler::class, 'editarPost'])->name('editar');
Route::get('/excluir/{id?}', [UsuarioControler::class, 'excluir'])->name('excluir');
