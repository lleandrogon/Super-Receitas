@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="{{ asset('mostrar/mostrar.css') }}">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <div class="voltar"><a href="{{ route('principal') }}"><i class="fa-solid fa-arrow-left"></i></a></div>
        <h1 class="titulo">{{ $receita->titulo }}</h1>
    </header>

    <div class="conteudo-container row d-flex justify-content-center align-items-center">
        <div class="col-md-6 d-flex justify-content-center">
            <img src="{{ asset('storage/' . $receita->imagem) }}" class="receita-imagem img-fluid" alt="Receita">
        </div>
        <div class="descricao col-md-6 justify-content-center">
            <p>Ingredientes: {{ $receita->ingredientes }}</p>
            <p>Preparo: {{ $receita->preparo }}</p>
        </div>
    </div>
@endsection