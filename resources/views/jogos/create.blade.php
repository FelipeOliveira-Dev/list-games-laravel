@extends('layouts.app')
@section('titulo','Adicionar Jogo')
@section('content')
    <!-- Tudo que for feito aqui vai ser renderizado no template -->
    <div class="container mt-5">
        <h1>Adicionar novo jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="post">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" placeholder="Digite a categoria do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" name="ano_criacao" class="form-control" placeholder="Digite o ano de criação do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input type="number" name="valor" class="form-control" placeholder="Digite o valor do jogo...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
@endsection