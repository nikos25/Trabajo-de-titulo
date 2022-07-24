<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\{UsuariosController, generalController, CatalogoController,
     NoticiaController, PatrocinadoresController, VideoController, ChatController, PerfilController, 
     RegistroController, EspecieController, CrearNoticaController, FotografiasController,
     CrearFotografiasController, CrearPatroController};

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
Route::get('/Fotografias/{especie}', [App\Http\Controllers\FotografiasController::class, 'fotografia'])->name('fotografia');
Route::get('/CrearFotografias', [App\Http\Controllers\CrearFotografiasController::class, 'crearFotografia'])->name('crearFotografia');
Route::post('/CrearFotografias', [App\Http\Controllers\CrearFotografiasController::class, 'store'])->name('crearFoto');
Route::get('/Fotografia/{foto}/editar', [App\Http\Controllers\CrearFotografiasController::class, 'edit'])->name('editFotografia');
Route::post('/Fotografia/{foto}/editar', [App\Http\Controllers\CrearFotografiasController::class, 'update'])->name('fotografia.up');
Route::delete('/Fotografia/{foto}/eliminar', [App\Http\Controllers\CrearFotografiasController::class, 'destroy'])->name('borrarFoto');

Route::get('/Especie', [App\Http\Controllers\EspecieController::class, 'Especie'])->name('Especie');
Route::post('/Especie', [App\Http\Controllers\EspecieController::class, 'store'])->name('crearEspecie');
Route::get('/Especie/{especie}/editar', [App\Http\Controllers\EspecieController::class, 'edit'])->name('editEspecie');
Route::post('/Especie/{especie}/editar', [App\Http\Controllers\EspecieController::class, 'update'])->name('Especie.update');
Route::delete('/Especie/{especie}/eliminar', [App\Http\Controllers\EspecieController::class, 'destroy'])->name('borrarEspecie');


Route::get('/Videos', [App\Http\Controllers\VideoController::class, 'video'])->name('video');
Route::get('/Videos/CrearVideo', [App\Http\Controllers\VideoController::class, 'crearVideo'])->name('crearVideo');
Route::post('/Videos/Crear', [App\Http\Controllers\VideoController::class, 'store'])->name('video.store');
Route::get('/Videos/{video}/editar', [App\Http\Controllers\VideoController::class, 'edit'])->name('editVideo');
Route::post('/Videos/{video}/editar', [App\Http\Controllers\VideoController::class, 'update'])->name('video.up');
Route::delete('/Videos/{video}/eliminar', [App\Http\Controllers\VideoController::class, 'destroy'])->name('borrarVideo');

Route::get('/Noticias', [App\Http\Controllers\NoticiaController::class, 'noticia'])->name('noticia');
Route::get('/CrearNoticias', [App\Http\Controllers\CrearNoticaController::class, 'crearNoticia'])->name('crearNoticia');
Route::post('/CrearNoticias', [App\Http\Controllers\CrearNoticaController::class, 'store'])->name('NoticiaPost');
Route::get('/Noticias/{noticia}/editar', [App\Http\Controllers\CrearNoticaController::class, 'edit'])->name('editarNoticia');
Route::post('/Noticias/{noticia}/editar', [App\Http\Controllers\CrearNoticaController::class, 'update'])->name('Noticia.update');
Route::delete('Noticias/{noticia}/eliminar', [App\Http\Controllers\CrearNoticaController::class, 'destroy'])->name('borrarNoticia');

Route::get('/Patrocinadores', [App\Http\Controllers\PatrocinadoresController::class, 'patrocinadores'])->name('patrocinadores');
Route::get('/CrearPatrocinador', [App\Http\Controllers\CrearPatroController::class, 'crearPatrocinador'])->name('crearPatrocinador');
Route::post('/CrearPatrocinador', [App\Http\Controllers\CrearPatroController::class, 'store'])->name('patrocinador.store');
Route::get('/Patrocinador/{patrocinador}/editar', [App\Http\Controllers\CrearPatroController::class, 'edit'])->name('editarPatrocinador');
Route::post('/Patrocinador/{patrocinador}/editar', [App\Http\Controllers\CrearPatroController::class, 'update'])->name('editarPatrocinador');
Route::delete('/Patrocinador/{patrocinador}/eliminar', [App\Http\Controllers\CrearPatroController::class, 'destroy'])->name('borrarPatrocinador');

Route::get('/Chat', [App\Http\Controllers\ChatController::class, 'chat'])->name('chat');

Route::get('/Perfil', [App\Http\Controllers\PerfilController::class, 'perfil'])->name('perfil');