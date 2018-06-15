
<?php

$host ="localhost";
$user = "Admin";
$pass ="admin";
$banco="academici";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die (mysqli_error());

?>

<?php

$nome_completo = $_POST ['nome_completo'];
$cpf = $_POST ['cpf'];
$data_nascimento = $_POST ['data_nascimento'];
$curso = $_POST ['curso'];
$universidade = $_POST['universidade'];
$data_formacao = $_POST ['data_formacao'];


$sql =mysqli_query($conexao, "INSERT INTO alunos (nome_completo, cpf, data_nascimento,
curso,universidade,data_formacao) VALUES ('$nome_completo','$cpf', '$data_nascimento', '$curso',
'$universidade', '$data_formacao')");

mysqli_close($conexao);

echo "<script>alert('Dados Inseridos com sucesso');</script>";
echo "<script>location.href='perfilsec.php';</script>";


?> 