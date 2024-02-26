<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',[ProductoController::class, 'index'])->name('producto.index');

Route::get('create',[ProductoController::class, 'create'])->name('producto.create');

Route::post('store',[ProductoController::class, 'store'])->name('producto.store');

Route::get('edit/{id}',[ProductoController::class, 'edit'])->name('producto.edit');

Route::get('eliminar/{id}',[ProductoController::class, 'eliminar'])->name('producto.eliminar');

Route::put('update/{id}',[ProductoController::class, 'update'])->name('producto.update');

Route::get('destroy{id}',[ProductoController::class, 'destroy'])->name('producto.destroy');

Route::get('ventas',[VentaController::class , 'index'])->name('ventas.index');

Route::post('ventastore',[VentaController::class , 'ventastore'])->name('mostrar.store');