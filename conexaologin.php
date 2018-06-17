
<?php

$host ="localhost";
$user = "Admin";
$pass ="admin";
$banco="academici";
$con = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($con,$banco) or die (mysqli_error());

?>
<?
/** 
* Executa a consulta no banco de dados. 
* Caso o número de linhas retornadas seja 1 o login é válido, 
* caso 0, inválido. 
*/ 
$SQL = "SELECT  usuario, senha
FROM aut_usuarios 
WHERE login = "" . $login . """; 
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!"); 
$total = @mysql_num_rows($result_id); 
 
// Caso o usuário tenha digitado um login válido o número de linhas será 1.. 
if($total) 
{ 
// Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão 
$dados = @mysql_fetch_array($result_id); 
 
// Agora verifica a senha 
if(!strcmp($senha, $dados["senha"])) 
{ 
// TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
$_SESSION["id_usuario"]= $dados["id"]; 
$_SESSION["nome_usuario"] = stripslashes($dados["nome"]); 
$_SESSION["permissao"]= $dados["postar"]; 
header("Location: index.php"); 
exit; 
} 
// Senha inválida 
else 
{ 
echo "Senha inválida!"; 
exit; 
} 
} 
// Login inválido 
else 
{ 
echo "O login fornecido por você é inexistente!"; 
exit; 
} 
?>