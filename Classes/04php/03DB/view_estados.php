<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Lista de estados</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  </head>
  <body>
    <h1>Lista de Estados</h1>

    <div class="table-reponsive-sm">
      <table class="table table-bordered table-hover table-striped">
        <caption>Sistemas Web I</caption>
        <thead class="thead-dark">
          <tr>
            <th>Nome</th>
            <th>Sigla</th>
            <th>ID</th>
          </tr>
        </thead>
        <tbody>


          <?php
          $cont=0;
          while($estado=$estados->fetch()){
            echo "<tr>";
            echo "<td>".$estado["nome"]."</li>";
            echo "<td>".$estado["sigla"]."</li>";
            echo "<td>".$estado["id"]."</li>";
            echo "</tr>";
            $cont++;
          }

        echo "</tbody>";
        echo "<tfoot>";
          echo "<tr>";
            echo"<td colspan="."2".">Total estados: </td>";
            echo"<td>".$cont." </td>";
          echo "</tr>";
        echo "</tfoot>";
        ?>
      </table>

    <!-- <?php
    echo "<ol>";
    while($estado=$estados->fetch()){
        // var_dump($estado);
        echo "<li>".$estado["nome"]."</li>\n";

    }
    echo"</ol>";

    ?> -->
  </body>
</html>


<!-- fazer em forma de tabela -->
<!-- gerar chaves diferentes para aplicações diferentes php artisan key:generate -->

 <!-- na pasta laravel empty extrair a folder e nomear com nome do projeto que quer
 dentro da folder iniciar bash com comando php artisan serve  -->

<!-- Trazer template de alguma aplicação  -->
