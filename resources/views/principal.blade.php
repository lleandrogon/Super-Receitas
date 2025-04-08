@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="principal/principal.css">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <div class="row">
            <div class="col-6 d-flex align-items-center">
                <img src="assets/logo.png" class="logo" alt="Logo">
                <p class="titulo-projeto">Super Receitas</p>
            </div>
            <div class="col-lg-6 d-none d-lg-flex justify-content-end align-items-center">
                <ul class="d-flex links-lista">
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Criar Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Minhas Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link">Sair</a></li>
                </ul>
            </div>
            <div class="col-6 d-flex d-lg-none justify-content-end align-items-center">
                <i class="menu-burger fa-solid fa-bars" onclick="toggleMenu()"></i>
            </div>
            <div id="nav-responsivo" class="d-none d-lg-none justify-content-center align-items-center">
                <ul class="links-lista-responsivo">
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link-responsivo">Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link-responsivo">Criar Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link-responsivo">Minhas Receitas</a></li>
                    <li class="sem-marcadores"><a href="#" class="sem-sublinhado link-responsivo">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="receitas">
        <div class="row">
            @foreach ($receitas as $receita)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $receita->titulo }}</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="principal/principal.js"></script>
@endsection