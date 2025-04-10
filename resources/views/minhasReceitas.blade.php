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
                    <th>Editar</th>
                    <th>Deletar</th>                   
                </tr>
            </thead>
            <tbody>
                @foreach ($receitas as $receita)
                    <tr>
                        <td>{{ $receita->titulo }}</td>
                        <td>{{ $receita->ingredientes }}</td>
                        <td>{{ $receita->preparo }}</td>
                        <td>{{ $receita->tempo }}</td>
                        <td><a href="{{ route('receita.form.editar', $receita->id) }}" class="caneta"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td>
                            <form action="{{ route('receita.destroy', $receita->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="lixo"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection