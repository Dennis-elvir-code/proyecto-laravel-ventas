<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('edit',[ProductoController::class, 'edit']);

Route::get('update',[ProductoController::class, 'update']);

Route::get('destroy',[ProductoController::class, 'destroy']);

