<?php

use App\Http\Controllers\AuteurController;
use Illuminate\Support\Facades\Route;

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

// ----------  Accès  --------------
Route::get('/', [AuteurController::class, 'index'])->name('home');

// ----------  Ajout  --------------
Route::post('/', [AuteurController::class, 'store']);

// ----------  Suppression  --------------
Route::post('/{id}', [AuteurController::class, 'destroy']);

// ----------  Show  --------------
Route::get('/crud/showauteur/{id}', [AuteurController::class, 'show']);

// ----------  Update  --------------
Route::get('/crud/editauteur/{id}', [AuteurController::class, 'edit']);
Route::put('/crud/updateauteur/{id}', [AuteurController::class, 'update']);