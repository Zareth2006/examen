<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [TareaController::class, 'index'])->name('home');
Route::post('/home/add', [TareaController::class, 'createtarea'])->name('add_tarea');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::post('/categoria/add', [CategoriaController::class, 'createcategoria'])->name('add_categoria');
Route::get('/categoria/editar/{id}', [CategoriaController::class, 'updateCategoriaView'])->name('editar_categoria.view');
Route::delete('/categoria/eliminar/{id}', [CategoriaController::class, 'deleteCategoria'])->name('eliminar_categoria');




require __DIR__.'/auth.php';
