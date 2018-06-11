
<?php

$host ="localhost";
$user = "root";
$pass ="";
$banco="academici";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die (mysqli_error());

?>

<?php

$nome_completo = $_POST ['nome_completo'];
$cpf = $_POST ['cpf'];
$data_nascimento = $_POST ['data_nascimento'];
$email = $_POST ['email'];
$empresa_atual = $_POST ['empresa_atual'];
$cargo_atual = $_POST ['cargo_atual'];
$admissao_ano = $_POST ['admissao_ano'];
$nivel_cargo = $_POST ['nivel_cargo'];
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

$sql =mysqli_query($conexao, "INSERT INTO alunos (nome_completo, cpf, data_nascimento, 
email,empresa_atual, cargo_atual, admissao_ano,nivel_cargo, usuario, senha )
 VALUES ('$nome_completo','$cpf', '$data_nascimento','$email', 
 '$empresa_atual','$cargo_atual','$admissao_ano','$nivel_cargo','$usuario', '$senha')");

mysqli_close($conexao);

echo "<script>location.href='questionario.php';</script>";
?> 


