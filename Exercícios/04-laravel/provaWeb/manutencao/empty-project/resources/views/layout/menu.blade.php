<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Manutenção de Equipamentos</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Raleway', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0;
      }
    </style>
  </head>
  <body>

    <p><a href="#"></p>Home</p>
    <p><a href="{{url('/listar')}}">Área Geral</p>
    <p><a href="{{url('/areaAdmin')}}">Área do Administrador</a></p>

    @yield('conteudo')
  </body>
</html>
