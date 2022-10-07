<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

                // rota para a view login
Route::get('/login', [ProfileController::class, 'login'])->name('profile.login');


