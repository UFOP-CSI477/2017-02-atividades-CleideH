@extends('layout.menu')
    @section('conteudo')

        <h2> Área Geral<h2>

          <table>
            <tr>
              <th>Data limite<th>
              <th>Nome do equipamento</th>
              <th>Tipo da manutenção</th>
              <th>Descrição da manutenção</th>
            </tr>
              @foreach($registros as $r)
                <tr>
                  <td>{{ $r->datalimite }}</td>
                  <td>{{ $r->equipamento->nome }}</td>
                  @if($r->tipo == 1)
                    <td>Preventiva</td>
                  @elseif($r->tipo == 2)
                    <td>Corretiva</td>
                  @else
                    <td>Urgente</td>
                  @endif
                  <td>{{ $r->descricao}}</td>
                </tr>
            @endforeach
          </table>

    @endsection('conteudo')
