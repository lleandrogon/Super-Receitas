@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="{{ asset('editar/editar.css') }}">
@endsection

@section('conteudo')
    @include('estrutura.cabecalho')

    <div class="form-container">
        <form action="{{ route('receita.update', $receita->id) }}" method="POST" enctype="multipart/form-data" class="form-criar">
            @csrf
            @method('PUT')
            <h2 class="titulo-form">Edite sua receita!</h2>
            <div class="mb-3">
                <label class="form-label" for="titulo">Nome da Receita</label>
                <input class="form-control" type="text" name="titulo" id="titulo" value="{{ $receita->titulo }}">
                @error('titulo')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="ingredientes">Ingredientes</label>
                <textarea class="form-control" name="ingredientes" id="ingredientes" rows="4">{{ $receita->ingredientes }}</textarea>
                @error('ingredientes')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="preparo">Preparo</label>
                <textarea class="form-control" name="preparo" id="preparo" rows="4">{{ $receita->preparo }}</textarea>
                @error('preparo')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="tempo">Tempo (Minutos)</label>
                <input class="form-control" type="number" name="tempo" id="tempo" min="1" value="{{ $receita->tempo }}">
                @error('tempo')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="imagem">Imagem</label>
                <input class="form-control" type="file" name="imagem" id="imagem" value="{{ $receita->imagem }}">
                @error('imagem')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="botao-container d-flex justify-content-end">
                <button type="submit" class="botao-criar">Editar Receita</button>
            </div>
        </form>
    </div>
@endsection