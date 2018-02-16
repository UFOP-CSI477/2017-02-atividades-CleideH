@extends('layout.menu')

@section
<h2>Pesquisa Manutenção</h2>

    <select>
      @foreach($equipamentos as $e)
          <option value="{{$e->id}}">{{$e->nome}}</option>
      @endforeach


    <select>



@endsection
