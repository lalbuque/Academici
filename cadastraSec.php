<?php
require_once("conexaoBanco.php");


$nome_completo = $_POST['nome_completo'];
$cpf = $_POST['cpf'];
$usuario = $_POST['usuario'];
$admissao = $_POST['admissao'];


$sql= mysqli_query ($conexao, "INSERT INTO secretaria (nome_completo, cpf, usuario, admissao) VALUES ('$nome_completo','$cpf','$usuario','$admissao');");
mysqli_close ($conexao);

echo  "<script>alert('Dados gravados com sucesso');</script>";
echo  "<script>location.href = 'administracao.php'; </script>";
?>