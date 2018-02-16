@extends('layout.menu')
  @section('conteudo')

      <h2>Equipamentos<h2>

          <table>

              <tr>
                <th>Id</th>
                <th>Nome</th>
              </tr>

              @foreach($equipamentos as $e)
                <tr>
                  <td>{{$e->id}}</td>
                  <td>{{$e->nome}}</td>
                </tr>

              @endforeach

          </table>
  @endsection('conteudo')
