@extends('layout.principal')
@section('conteudo')

    <table >

      <!--Cabeçalho tabea-->
      <tr>
          <th>Código</th>
          <th>Nome</th>
        </tr>

      <!--Dados-->
        @foreach($alunos as $aluno)
          <tr>
            <td>{{$aluno->id}}</td>
            <td>{{$aluno->nome}}</td>
          </tr>

        @endforeach

    </table>
@endsection
