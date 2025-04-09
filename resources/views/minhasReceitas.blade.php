@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="{{ asset('minhasReceitas/minhasReceitas.css') }}">
@endsection

@section('conteudo')
    @include('estrutura.cabecalho')

    <h2 class="titulo">Minhas Receitas</h2>

    <div class="tabela-container">
        <table class="tabela">
            <thead class="cabecalho-tabela">
                <tr>
                <th>Nome</th>
                <th>Ingredientes</th>
                <th>Preparo</th>
                <th>Tempo (m)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($receitas as $receita)
                    <tr>
                        <td>{{ $receita->titulo }}</td>
                        <td>{{ $receita->ingredientes }}</td>
                        <td>{{ $receita->preparo }}</td>
                        <td>{{ $receita->tempo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection