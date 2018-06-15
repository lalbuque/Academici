<?php

$host = "localhost";
$usuario = "Admin";
$senha = "admin";
$bd = "academici";

$conexao = @mysqli_connect($host, $usuario, $senha) or die(mysqli_connect_error());
mysqli_select_db($conexao,$bd) or die (mysqli_error());

if($conexao->connect_errno)
  echo "Falha na conexão: (".$conexao->connect_error.") ".$conexao->connect_error;

?>