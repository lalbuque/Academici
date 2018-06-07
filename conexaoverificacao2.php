
<?php

$host ="localhost";
$user = "root";
$pass ="";
$banco="academici";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die (mysqli_error());

?>

<?php

$result =mysqli_query($conexao, "SELECT FROM cadastro WHERE (nome_completo = $nome_completo  AND cpf = $cpf AND data_nascimento = $data_nascimento)");
    
if ($result) {
    echo "<script>location.href='verificacaoacesso2.php';</script>";
} 


?> 
