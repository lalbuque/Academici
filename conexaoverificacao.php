
<?php
require_once("conexaoBanco.php");   

?>

<?php


$email = $_POST ['email'];
$empresa_atual = $_POST ['empresa_atual'];
$cargo_atual = $_POST ['cargo_atual'];
$admissao_ano = $_POST ['admissao_ano'];
$nivel_cargo = $_POST ['nivel_cargo'];
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

$sql =mysqli_query($conexao, "INSERT INTO alunos (email,empresa_atual, cargo_atual, admissao_ano,nivel_cargo, usuario, senha )
 VALUES ('$email', 
 '$empresa_atual','$cargo_atual','$admissao_ano','$nivel_cargo','$usuario', '$senha')");

mysqli_close($conexao);

echo "<script>location.href='questionario.php';</script>";
?> 


