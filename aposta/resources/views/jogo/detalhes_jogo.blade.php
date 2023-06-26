@extends('layouts.app')

@section('content')
    <h1>Detalhes do Jogo</h1>

    <h2>{{ $jogo->nome }}</h2>
    <p>{{ $jogo->descricao }}</p>

@endsection
