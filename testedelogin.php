<html>

<head>
<title> Cadastrando </title>
</head>

<body>

<?php
$host ="localhost"; //Dados do banco de dados 
$user ="Admin";
$pass ="admin";
$banco ="login";
$conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error()); // conexão linha14 e 15
?> 

<?php
$user = $_POST['user'];
$senha = $_POST['senha'];


//Enviando dados pro banco de dados
$sql =mysqli_query($conexao,"INSERT INTO loginal (user,senha) VALUES ('$user','$senha')");
echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
mysqli_close($conexao);


?>
</body>
</html>