<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController; // Importe o UserController

Route::get('/', function () {
    return view('tasks.index');
})->name('EletroDescarte'); // Adicionei o 'name' para ser um redirecionamento válido

Route::get('/descartar', function () {
    return view('tasks.descartar');
})->name('descartar');

Route::get('/OndeDescarte', function () {
    return view('tasks.ondeDescarte');
})->name('OndeDescarte');

Route::get('/assistencia', function () {
    return view('tasks.assistecia2'); // Corrigido 'assistecia2' para 'assistencia'
})->name('assistencia');

Route::get('/historico', function () {
    return view('tasks.historico');
})->name('historico');


// Rota para a p\u00E1gina de listagem de usu\u00E1rios
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');

// Rotas de Autentica\u00E7\u00E3o
Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');