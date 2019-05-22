<?php

// Configuração
$database = "";

// mysql roda numa porta específica 3306

$dbuser ="root";
$dbpassword = "1um2dois3tres4quatro";
$dbhost = "127.0.0.1";
//$dbhost = localhost:3306 

$strConn = "mysql:host=$dbhost;dbname=$database";
$connection = new PDO($strConn, $dbuser, $dbpassword);

var_dump($connection);
