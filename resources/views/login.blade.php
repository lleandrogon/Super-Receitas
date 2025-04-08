@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="login/login.css">
@endsection

@section('conteudo')
    <div class="login-container">
        <form class="form-login" action="{{ route('login.autenticar') }}" method="POST">
            @csrf
            <h2 class="titulo-login">Bem-Vindo!</h2>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" id="senha">
                @error('senha')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <a href="{{ route('registro.index') }}" class="botao-login-registro sem-sublinhado">Registrar</a>
                <button type="submit" class="botao-login-registro">Login</button>
            </div>
            @if ($errors->has('auth'))
                <div class="erro">{{ $errors->first('auth') }}</div>
            @endif
        </form>
    </div>
@endsection