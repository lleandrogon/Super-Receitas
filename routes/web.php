<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\RegistroController;
use App\Http\Middleware\CancelarRotaMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/entrar", [LoginController::class, "index"])->name("login.index");

Route::post("/entrar", [LoginController::class, "autenticar"])->name("login.autenticar");

Route::get("/registrar", [RegistroController::class, "index"])->name("registro.index");

Route::post("/registrar", [RegistroController::class, "registrar"])->name("registro.registrar");

Route::get("/", [PrincipalController::class, "index"])->name("principal")->middleware(CancelarRotaMiddleware::class);

Route::get("/criar-form", [ReceitaController::class, "index"])->name("receita.form")->middleware(CancelarRotaMiddleware::class);

Route::post("/criar-receita", [ReceitaController::class, "criar"])->name("receita.criar")->middleware(CancelarRotaMiddleware::class);

Route::get("/receita/{id}", [ReceitaController::class, "show"])->name("mostrar")->middleware(CancelarRotaMiddleware::class);

Route::get("/minhas-receitas", [ReceitaController::class, "minhasReceitas"])->name("minhas.receitas")->middleware(CancelarRotaMiddleware::class);

Route::post("/logout", [LoginController::class, "logout"])->name("logout");