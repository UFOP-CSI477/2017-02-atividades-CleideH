@extends('layout.principal')
    @section('conteudo')

    <h1>Dados da Cidade</h1>


    <p>Código:{{$cidade->id}}</p>
    <p>Cidade:{{$cidade->nome}}</p>
    <p>Estado:{{$cidade->estado->nome}}</p>

    <form method="post" action="/cidades/{{$cidade->id}}">

      {{csrf_field()}}
      {{method_field('DELETE')}}

      <input type="submit" value="Excluir">
      <a href="{{ url('/cidades') }}">Voltar</a>
    </form>

 @endsection
