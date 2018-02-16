@extends('layout.menu')

  @section('conteudo')

          <form  action="search" method="get" >

            <input name ="name" type="text" placeholder="Informe o nome do equipamento">
            <input type="submit" name="search">

          </form>


  @endsection('conteudo')
