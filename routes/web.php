<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\UserController;
use App\Models\Exercicio;
use App\Models\Treino;
use App\Models\User;

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
Route::get('/teste', function () {

    $treino = Treino::with('users', 'exercicios')->find(18);
    $usuario = User::with('treinos')->find(1);
    foreach($usuario->treinos as $trein){
        echo 'Treino numero:' . $trein->id . '<br>';
        echo 'nome:' . $trein->nome . '<br>';
        echo 'carga:'. $trein->nome.  '<br>';
        echo 'descrição:'. $trein->nome . '<br><br>';
    }
    foreach ($treino->users as $user) {
        if ($treino->user_id == $user->id) {
            echo $treino->exercicio_id;
            echo $user->nome;
        }
    }
});

// rota para a view login
Route::get('/login', [ProfileController::class, 'login'])->name('profile.login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

// =========================== ROTA PARA PAGINA DE REGISTRO =======================
Route::get('/register/professor', [ProfileController::class, 'register_prof'])->name('profile.register_professor');
Route::get('/register/aluno', [ProfileController::class, 'register_aluno'])->name('profile.register_aluno');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
// =========================== PARA ONDE OS DADOS DO REGISTRO VÃO =======================
Route::post('/register', [UserController::class, 'auth'])->name('user.register');

//==================== INDEX TREINO PROFESSOR =======================
Route::get('/treinos', [TreinoController::class, 'index'])->name('treino.index');

//==================== CRIAR TREINO =======================
Route::get('/treinos/create/{id}', [TreinoController::class, 'create'])->name('treino.create');
Route::post('/treino/store', [TreinoController::class, 'store'])->name('treino.store');
Route::get('/treinos/show/{id}', [TreinoController::class, 'show'])->name('treino.show');


//==================== EXERCICIO =======================
Route::get('/exercicio', [ExercicioController::class, 'index'])->name('exercicio.index');
Route::get('/exercicio/create', [ExercicioController::class, 'create'])->name('exercicio.create');
Route::post('/exercicio/store', [ExercicioController::class, 'store'])->name('exercicio.store');
Route::delete('/exercicio/{id}', [ExercicioController::class, 'destroy'])->name('exercicio.destroy');
Route::get('/exercicio/edit/{id}', [ExercicioController::class, 'edit'])->name('exercicio.edit');
Route::put('/exercicio/update/{id}', [ExercicioController::class, 'update'])->name('exercicio.update');

// //  teste de rota da tela de criação
// Route::get('/', function () {
//     return view ('criacao.criacao');
// });
