<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistroController extends Controller
{
    public function index() {
        return view("registro");
    }

    public function registrar(Request $request) {
        $regras = [
            'nome' => 'required',
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'nome.required' => 'Nome é obrigatório!',
            'email.email' => 'Email inválido!',
            'senha.required' => 'Senha é obrigatória!'
        ];

        $request->validate($regras, $feedback);

        $user = User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => Hash::make($request->senha),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('login.index');
    }
}
