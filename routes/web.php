<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\{loginController, registroController, generalController, CatalogoController,
     NoticiasController, PatrocinadoresController, VideosController, ChatController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('general.index');
});
Route::get('/iniciosesion', [App\Http\Controllers\loginController::class, 'login'])->name('login');

Route::get('/registrar', [App\Http\Controllers\registroController::class, 'registro'])->name('registro');
Route::post('/registrar', [App\Http\Controllers\registroController::class, 'store'])->name('registro.store');

Route::get('/bienvenido', [App\Http\Controllers\generalController::class, 'inicio'])->name('index');

Route::get('/Catalogo', [App\Http\Controllers\CatalogoController::class, 'fotos'])->name('fotos');

Route::get('/Videos', [App\Http\Controllers\VideosController::class, 'video'])->name('video');

Route::get('/Noticias', [App\Http\Controllers\NoticiasController::class, 'noticia'])->name('noticia');

Route::get('/Patrocinadores', [App\Http\Controllers\PatrocinadoresController::class, 'patro'])->name('patro');

Route::get('/Chat', [App\Http\Controllers\ChatController::class, 'chat'])->name('chat');