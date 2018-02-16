@extends('layout.principal')

@section('conteudo')


          <h1>Cidades</h1>

          <a href="{{url('/estados.store')}}">Inserir</a>

          <table>

              <tr>
                  <th>Nome</th>
                  <th>Estado</th>
              </tr>
                  @foreach($cidades as $c)
                      <tr>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->estado->sigla}}</td>
                        <td><a href="/cidades/{{ $c->id }}">Exibir</a>
                        <td><a href="/cidades/{{ $c->id }}/edit">Editar</a>
                        <td><a href="/cidades/{{ $c->id }}/destroy"> Excluir</td>

                      </tr>
                  @endforeach


          </table>


@endsection('conteudo')
