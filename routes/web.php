<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\PageController;

//* aggiunto controller dalla CRUD
// use App\Http\Controllers\DCComicController;
use App\Http\Controllers\DCComicController;

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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/information', [PageController::class, 'info'])->name('info');

// ora con php artisan route:list vengono mostrate tutte le route di dc_comics
Route::resource('d_c_comics', DCComicController::class);
