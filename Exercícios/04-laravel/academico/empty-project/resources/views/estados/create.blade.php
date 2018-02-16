@extends('layout.principal')


@section('conteudo')

  <h1>Inserir estado</h1>
  <a href="{{url('/estados')}}">Voltar</a>

    <form method="post" action="{{url('/estados')}}">

      {{csrf_field()}}

      Nome: <input type="text" name="nome"><br>
      Sigla: <input type="text" name="sigla"><br>

          <input type="submit" name="btnSalvar" value="Salvar">


    </form>


@endsection('conteudo')
