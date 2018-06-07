
<?php

$host ="localhost";
$user = "Admin";
$pass ="admin";
$banco="infarto";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die (mysqli_error());

?>

<?php
$cpf = $_POST ['cpf'];

$nome_completo = $_POST ['nome_completo'];

$sql =mysqli_query($conexao, "INSERT INTO depressao (nome_completo,cpf) VALUES ('$nome_completo','$cpf')");


mysqli_close($conexao);


?>

