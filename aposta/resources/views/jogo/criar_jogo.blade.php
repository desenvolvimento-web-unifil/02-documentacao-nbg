@extends('layouts.app')

@section('content')
    <h1>Criar Jogo</h1>

    <form method="POST" action="{{ route('jogo.store') }}">
        @csrf

        <div>
            <label for="nome">Nome do Jogo:</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div>
            <label for="descricao">Descrição do Jogo:</label>
            <textarea id="descricao" name="descricao" required></textarea>
        </div>

        <button type="submit">Criar Jogo</button>
    </form>
@endsection
