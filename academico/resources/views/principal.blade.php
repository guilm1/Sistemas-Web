<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Academico')</title>
  </head>
  <body>
    <!-- Links - menu lateral // -->

      <ul>
        <li><a href="/"> Home</a></li>
        <li><a href="/welcome">About</a></li>
        <li><a href="/alunos/listar">Listar</a></li>
      </ul>

    <!-- Conteúdo - parte central //-->
    @yield('conteudo')
    <!-- //esse comando gera uma seção -->

    </ol>
  </body>
</html>
