<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Lista de estados</title>
  </head>
  <body>
    <?php
    echo "<ol>";
    while($estado=$estados->fetch()){
        // var_dump($estado);
        echo "<li>".$estado["nome"]."</li>\n";

    }
    echo"</ol>";

    ?>
  </body>
</html>


<!-- fazer em forma de tabela -->
<!-- gerar chaves diferentes para aplicações diferentes php artisan key:generate -->

 <!-- na pasta laravel empty extrair a folder e nomear com nome do projeto que quer
 dentro da folder iniciar bash com comando php artisan serve  -->

<!-- Trazer template de alguma aplicação  -->
