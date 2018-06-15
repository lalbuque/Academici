<?php
require_once("conexaoBanco.php");


$titulo = $_POST['titulo'];
$rua = $_POST['rua'];
$data = $_POST['data'];
$admissao = $_POST['admissao'];


$sql= mysqli_query ($conexao, "INSERT INTO secretaria (titulo, rua, data, admissao) VALUES ('$titulo','$rua','$data','$admissao');");
mysqli_close ($conexao);

echo  "<script>alert('Dados gravados com sucesso');</script>";
echo  "<script>location.href = 'administracao.php'; </script>";
?>