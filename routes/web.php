<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/',[UsersController::class, 'show'] )->name("accueil");
Route::post('/supprimer/{id}', [UsersController::class, 'supp'])->name('supprimer');
Route::get('/supprimer/{id}', [UsersController::class, 'surete'])->name('verification');
Route::post('/ajout', [UsersController::class, 'add'])->name('ajouter');
Route::get('/modifier/{id}',  [UsersController::class , 'modifier'])->name('affichage_modif');
Route::post('/modifier/{id}',  [UsersController::class , 'maj'])->name('modif');