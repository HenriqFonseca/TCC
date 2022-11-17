<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreinoController;
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
Route::get('/a', [HomeController::class, 'index'])->name('home.index');

                // rota para a view login
Route::get('/login', [ProfileController::class, 'login'])->name('profile.login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

// =========================== ROTA PARA PAGINA DE REGISTRO =======================
Route::get('/register', [ProfileController::class, 'register'])->name('profile.register');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
// =========================== PARA ONDE OS DADOS DO REGISTRO VÃO =======================
Route::post('/register', [UserController::class, 'auth'])->name('user.register');

//==================== INDEX TREINO PROFESSOR =======================
Route::get('/treinos', [TreinoController::class, 'index'])->name('treino.index');
Route::get('/treino', [TreinoController::class, 'rota_treinos_aluno'])->name('treino.rota.alunos');

//==================== CRIAR TREINO =======================
Route::get('/treinos/create/{id}', [TreinoController::class, 'create'])->name('treino.create');




Route::get('/', function () {
    return view ('teste.html');
});




