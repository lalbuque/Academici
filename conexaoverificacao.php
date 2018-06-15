
<?php
require_once("conexaoBanco.php"); 
require_once("conexaoverificacao2.php");
require_once("verifica-usuario.php");


$nome_completo = $_POST ['nome_completo'];
$email = $_POST ['email'];
$empresa_atual = $_POST ['empresa_atual'];
$cargo_atual = $_POST ['cargo_atual'];
$admissao_ano = $_POST ['admissao_ano'];
$nivel_cargo = $_POST ['nivel_cargo'];
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];


$sql =mysqli_query($conexao, "UPDATE alunos SET email='$email', empresa_atual = '$empresa_atual',cargo_atual='$cargo_atual', admissao_ano='$admissao_ano',
nivel_cargo='$nivel_cargo', usuario = '$usuario', senha='$senha' WHERE nome_completo = '$nome_completo' ");

mysqli_close($conexao);

 echo "<script>location.href='questionario.php';</script>";
?> 


