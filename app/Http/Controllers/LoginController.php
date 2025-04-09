<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("login");
    }

    public function autenticar(Request $request) {
        $regras = [
            "email" => "email",
            "senha" => "required"
        ];

        $feedback = [
            "email.email" => "Email inválido!",
            "senha.required" => "Senha é obrigatória!"
        ];

        $request->validate($regras, $feedback);

        $credenciais = [
            'email' => $request->email,
            'password' => $request->senha
        ];

        if (Auth::attempt($credenciais)) {
            return redirect()->route('principal');
        } else {
            return back()->withErrors(['auth' => 'Email e/ou senha incorretos!']);
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login.index');
    }
}
