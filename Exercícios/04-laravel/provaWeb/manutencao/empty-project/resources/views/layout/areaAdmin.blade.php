<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Área do Administrador</title>
  </head>
  <body>

    <p><a href="{{url('/listarEq')}}">Equipamentos</p>
    <p><a href="{{url('/searchEq')}}">Pesquisar Equipamentos</a></p>
    <p><a href="#">Registros</p>
    <p><a href="#">Pesquisar Registros</a></p>

    @yield('conteudo')
  </body>
</html>
