<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreinosController;
use App\Http\Controllers\UserController;

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
    //Rota para Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

                // rota para a view login
Route::get('/login', [ProfileController::class, 'login'])->name('profile.login');
Route::post('/login', [UserController::class, 'login'])->name('profile.login');


Route::get('/treinos', [TreinosController::class, 'treinos'])->name('treinos.treinos');

