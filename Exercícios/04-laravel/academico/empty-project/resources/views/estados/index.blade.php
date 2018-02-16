@extends('layout.principal')

@section('conteudo')


          <h1>Estados</h1>

          <a href="{{url('/estados.store')}}">Inserir</a>

          <table>

              <tr>
                  <th>Sigla</th>
                  <th>Nome</th>

              </tr>
                  @foreach($estados as $e)
                      <tr>
                        <td>{{$e->sigla}}</td>
                        <td>{{$e->nome}}
                       </tr>
                  @endforeach


          </table>


@endsection('conteudo')
