<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Painel\PainelController;
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

Route::get('/contato', [SiteController::class, 'contact']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/painel/paginaInicial',[PainelController::class, 'index'])->name('paginaInicial');//pagina inicial
    Route::get('painel/explorar',[PainelController::class,'explorar'])->name('explorar');//explorar
    Route::get('/painel/biblioteca', [PainelController::class, 'biblioteca'])->name('biblioteca');//biblioteca
    Route::get('/painel/meusLivros', [PainelController::class, 'meusLivros'])->name('meusLivros');//meus livros
    //default de autenticação
    Route::get('/painel/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/painel/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/painel/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 