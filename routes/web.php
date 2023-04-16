<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
    return view('home');
});
Route::get('/players', [AppController::class,'player'])->name('player');

Route::post('/players', [AppController::class,'name_of_player'])->name('name_of_player');

Route::post('/score', [AppController::class, 'score'])->name('score');
