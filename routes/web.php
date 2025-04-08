<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PrincipalController::class, "index"])->name("principal");

Route::get("/entrar", [LoginController::class, "index"])->name("login.index");

Route::post("/entrar", [LoginController::class, "autenticar"])->name("login.autenticar");

Route::get("/registrar", [RegistroController::class, "index"])->name("registro.index");

Route::post("/registrar", [RegistroController::class, "registrar"])->name("registro.registrar");