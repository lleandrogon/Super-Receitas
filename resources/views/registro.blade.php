@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="registro/registro.css">
@endsection

@section('conteudo')
    <div class="registro-container">
        <form class="form-registro" action="{{ route('registro.registrar') }}" method="POST">
            @csrf
            <h2 class="titulo-registro">Registre-se!</h2>
            <div class="mb-3">
                <label class="form-label" for="nome">Nome Completo</label>
                <input class="form-control" type="text" name="nome" id="nome">
                @error('nome')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email">
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
                <a href="{{ route('login.index') }}" class="botao-login-registro sem-sublinhado">Voltar</a>
                <button type="submit" class="botao-login-registro">Registrar</button>
            </div>
            @if ($errors->has('auth'))
                <div class="erro">{{ $errors->first('auth') }}</div>
            @endif
        </form>
    </div>
@endsection