@extends('layout.principal')
    @section('conteudo')

    <h1>Dados do Estado</h1>
    <a href="{{ url('/estados') }}">Voltar</a>

    <p>Código:{{$estado->sigla}}</p>
    <p>Cidade:{{$estado->nome}}</p>

 @endsection
