<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\Dashboard;

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

Route::get('/dashboard', [Dashboard::class,'dashboard'])->name('dashboard');


Route::prefix('autor')->group(function(){



Route::any('/index' , [AutorController::class,'index'])->name('autor.index'); //para ler uso get
Route::get('/create', [AutorController::class, 'create'])->name('autor.create');
Route::get('/edit/{id}', [AutorController::class, 'edit'])->name('autor.edit');
Route::get('/show/{id}', [AutorController::class, 'show'])->name('autor.show');
Route::get('/delete/{id}', [AutorController::class, 'delete'])->name('autor.delete');#estou passando parametro para o servidor

Route::post('/store', [AutorController::class, 'store'])->name('autor.store');
Route::put('/update/{id}', [AutorController::class, 'update'])->name('autor.update');#o id é chave primeira da tabela para identifcar quem estou modificando
Route::delete('/destroy/{id}', [AutorController::class, 'destroy'])->name('autor.destroy');#estou passando parametro para o servidor
});