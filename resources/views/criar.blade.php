@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="criar/criar.css">
@endsection

@section('conteudo')
    @include('estrutura.cabecalho')
    <div class="form-container">
        <form action="{{ route('receita.criar') }}" method="POST" enctype="multipart/form-data" class="form-criar">
            @csrf
            <h2 class="titulo-form">Crie sua Receita!</h2>
            <div class="mb-3">
                <label class="form-label" for="titulo">Nome da Receita</label>
                <input class="form-control" type="text" name="titulo" id="titulo">
            </div>
            <div class="mb-3">
                <label class="form-label" for="ingredientes">Ingredientes</label>
                <textarea class="form-control" name="ingredientes" id="ingredientes" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="preparo">Preparo</label>
                <textarea class="form-control" name="preparo" id="preparo" rows="4"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label" for="tempo">Tempo (Minutos)</label>
                <input class="form-control" type="number" name="tempo" id="tempo" min="1">
            </div>
            <div class="mb-3">
                <label class="form-label" for="imagem">Imagem</label>
                <input class="form-control" type="file" name="imagem" id="imagem">
            </div>
            <div class="botao-container d-flex justify-content-end">
                <button type="submit" class="botao-criar">Criar Receita</button>
            </div>
        </form>
    </div>
@endsection