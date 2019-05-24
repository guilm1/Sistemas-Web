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
