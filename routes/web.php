<?php

use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;

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

//faccio si che la pagina a caricamento del sito sia la index, lista dei comics
Route::get('/', [ComicController::class, 'index']);

//creo tutte le rotte della CRUD
Route::resource('comics', ComicController::class);
