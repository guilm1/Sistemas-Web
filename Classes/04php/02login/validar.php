<?php

$user = $_POST['usuario'];
$password = $_POST['senha'];

//var_dump($_POST);

// conexao ou recuperacao da conexao com DB
// Controller
// Validar

if ($user == "admin" && $password == "123456"){
  echo "<h1> Seja Bem Vindo!</h1>";
  echo "<p>Senha: $password </p>";
} else {
  echo "<h1>Usuário e ou senha inválido(s)!</h1>";
}
echo "<a href=\"index.php\"> Voltar</a>";
