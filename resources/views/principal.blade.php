@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="{{ asset('principal/principal.css') }}">
@endsection

@section('conteudo')
    @include('estrutura.cabecalho')

    <div class="home">
        
    </div>

    <div class="receitas">
        <div class="row">
            @foreach ($receitas as $receita)
                <div class="d-flex justify-content-center col-6 col-md-4 col-lg-3 my-2">
                    <div class="card borda-card" style="width: 20rem;">
                        <img src="{{ asset('storage/' . $receita->imagem) }}" class="card-img-top" alt="Receita">
                        <div class="card-body">
                          <h4 class="titulo-receita">{{ $receita->titulo }}</h4>
                          <p class="descricao"><span>Ingredientes: </span>{{ $receita->ingredientes }}</p>
                          <p class="descricao"><span>Preparo: </span>{{ $receita->preparo }}</p>
                          <a href="{{ route("mostrar", $receita->id) }}" class="botao-card sem-sublinhado">Ver Receita</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection