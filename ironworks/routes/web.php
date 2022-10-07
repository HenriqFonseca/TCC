<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Route::get('oq vai aparecer na URL' [Controller definido] , 'nome da função que está dentro do controller'])->name('nome que posso usar nos redirecionamentos')
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [HomeController::class, 'show'])->name('profile.login');


Route::get('login', [LoginController::class, 'login'])->name('profile.login');


