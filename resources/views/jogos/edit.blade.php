@extends('layouts.app')
@section('titulo','Editar Jogo')
@section('content')
    <!-- Tudo que for feito aqui vai ser renderizado no template -->
    <div class="container mt-5">
        <h1>Editar jogo</h1>
        <hr>
        <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="post">
        @csrf
        @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{$jogos->nome}}" placeholder="Digite o nome do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" value="{{$jogos->categoria}}" placeholder="Digite a categoria do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" name="ano_criacao" class="form-control" value="{{$jogos->ano_criacao}}" placeholder="Digite o ano de criação do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" name="valor" class="form-control" value="{{$jogos->valor}}" placeholder="Digite o valor do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
@endsection