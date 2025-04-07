@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="principal/principal.css">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="assets/logo.png" class="logo" alt="Logo">
                <p class="titulo-projeto">Super Receitas</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <ul class="d-flex links-lista">
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Criar Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Minhas Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>
@endsection