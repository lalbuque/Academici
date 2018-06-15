<?php

require_once("conexaoBanco.php"); 



$nome_completo = $_POST ['nome_completo'];
$cpf = $_POST ['cpf'];
$cargo = $_POST ['cargo'];
$admissao = $_POST ['admissao'];


$sql =mysqli_query($conexao, "INSERT INTO secretaria (nome_completo,
 cpf, cargo, admissao) VALUES ('$nome_completo','$cpf','$cargo','$admissao');");

mysqli_close($conexao);




echo "<script>alert('Dados gravados com sucesso');</script>";
echo "<script>location.href='administracao.php';</script>";


?>