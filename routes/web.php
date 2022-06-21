<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\{UsuariosController, generalController, CatalogoController,
     NoticiaController, PatrocinadoresController, VideosController, ChatController, PerfilController, 
     RegistroController, EspecieController, CrearNoticaController};

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
Route::get('/InicioSesion/logout', [App\Http\Controllers\UsuariosController::class, 'logout'])->name('logout');
Route::get('/InicioSesion', [App\Http\Controllers\UsuariosController::class, 'index'])->name('index');
Route::post('/InicioSesion', [App\Http\Controllers\UsuariosController::class, 'login'])->name('login');
Route::get('/Registrar', [App\Http\Controllers\UsuariosController::class, 'registro'])->name('registro');
Route::post('/Registrar', [App\Http\Controllers\UsuariosController::class, 'store'])->name('registro.store');

Route::get('/Bienvenido', [App\Http\Controllers\generalController::class, 'inicio'])->name('inicio');

Route::get('/Catalogo', [App\Http\Controllers\CatalogoController::class, 'catalogo'])->name('catalogo');

Route::get('/Especie', [App\Http\Controllers\EspecieController::class, 'Especie'])->name('Especie');
Route::post('/Especie', [App\Http\Controllers\EspecieController::class, 'store'])->name('crearEspecie');

Route::get('/Videos', [App\Http\Controllers\VideosController::class, 'video'])->name('video');

Route::get('/Noticias', [App\Http\Controllers\NoticiaController::class, 'noticia'])->name('noticia');
Route::get('/CrearNoticias', [App\Http\Controllers\CrearNoticaController::class, 'crearNoticia'])->name('crearNoticia');
Route::post('/CrearNoticias', [App\Http\Controllers\CrearNoticaController::class, 'store'])->name('NoticiaPost');

Route::get('/Patrocinadores', [App\Http\Controllers\PatrocinadoresController::class, 'patro'])->name('patro');

Route::get('/Chat', [App\Http\Controllers\ChatController::class, 'chat'])->name('chat');

Route::get('/Perfil', [App\Http\Controllers\PerfilController::class, 'perfil'])->name('perfil');