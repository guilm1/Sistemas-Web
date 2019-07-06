<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Academico')</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <body>
    <!-- Links - menu lateral // -->


    <div class="btn btn-light">
        <a class="btn btn-link" href="/">Home</a>
    </div>
    <div class="btn btn-light">
        <a class="btn btn-link" href="/welcome">About</a>
    </div>
    <div class="btn btn-light">
        <a class="btn btn-link" href="/alunos/listar">Listar</a>
    </div>
    <div class="btn btn-light">
        <a class="btn btn-link" href="/estados">Estados</a>
    </div>
    <div class="btn btn-light">
        <a class="btn btn-link" href="/cidades">Cidades</a>
    </div>


{{-- fazer url nomeada com estados index --}}

      {{-- <ul>
        <li><a href="/"> Home</a></li>
        <li><a href="/welcome">About</a></li>
        <li><a href="/alunos/listar">Listar</a></li>
        <li><a href="/estados">Estados</a></li>
      </ul> --}}

    <!-- Conteúdo - parte central //-->
    @yield('conteudo')
    <!-- //esse comando gera uma seção -->

  </body>
</html>
