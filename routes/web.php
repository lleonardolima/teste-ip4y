<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index-cliente', [ClienteController::class, 'index'])->name('cliente.index');

//formulario criação
Route::get('/criar-cliente', [ClienteController::class, 'criar'])->name('cliente.criar');


Route::post('/store-cliente', [ClienteController::class, 'store'])->name('cliente.store');


// Route::get('/mostrar-cliente', [ClienteController::class, 'mostrar'])->name('cliente.mostrar');

Route::get('/editar-cliente/{cliente}', [ClienteController::class, 'editar'])->name('cliente.editar');

Route::put('/update-cliente/{cliente}', [ClienteController::class, 'update'])->name('cliente.update');

Route::delete('/destroy-cliente/{cliente}', [ClienteController::class, 'destroy'])->name('cliente.destroy');