<?php

// Configuração
$database = "academico";

// mysql roda numa porta específica 3306

//se colocar a login root e senha mysql funciona
//mas dessa forma garante que só tenha acesso a ao banco em questão
$dbuser ="sistemaweb";
$dbpassword = "123456";
$dbhost = "127.0.0.1";
//$dbhost = localhost:3306

$strConn = "mysql:host=$dbhost;dbname=$database";
$connection = new PDO($strConn, $dbuser, $dbpassword);

//var_dump($connection);

//Controller -> Model
$estados = $connection->query("SELECT * FROM estados");
//var_dump($estados);

// INCLUDE()
// REQUIRE()
// INCLUDE-ONCE()
// // REQUIRE-ONCE()
// echo "<ol>";
// while($estado=$estados->fetch()){
//     // var_dump($estado);
//     echo "<li>".$estado["nome"]."</li>\n";
//
// }
// echo"</ol>"
require 'view_estados.php';
