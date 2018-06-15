<?php
require_once("conexaoBanco.php");


$titulo = $_POST['titulo'];
$endereco = $_POST['endereco'];
$data = $_POST['data'];
$inicio = $_POST['inicio'];
$fim = $_POST['fim'];
$descricao = $_POST['descricao'];


$sql= mysqli_query ($conexao, "INSERT INTO eventos (titulo, endereco, data, inicio, fim, descricao) 
VALUES ('$titulo','$endereco','$data','$inicio','$fim','$descricao');");
mysqli_close ($conexao);

echo  "<script>alert('Dados gravados com sucesso');</script>";
echo  "<script>location.href = 'perfilsec.php'; </script>";
?>