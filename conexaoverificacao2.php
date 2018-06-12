
<?php

$host ="localhost";
$user = "Admin";
$pass ="admin";
$banco="academici";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die (mysqli_error());

?>

<?php

$result_usuario = "SELECT * FROM alunos WHERE nome_completo = '$nome_completo' && cpf = '$cpf' && data_nascimento = '$data_nascimento' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado = mysqli_fetch_assoc($resultado_usuario);
// if ($result_usuario) {
//     echo "<script>location.href='verificacaoacesso2.php';</script>";
// } 


?> 
