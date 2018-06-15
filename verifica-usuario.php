<?php require_once("conexaoBanco.php");  

session_start();
function usuarioEstaLogado() 
{
   return isset($_SESSION["usuario"]) && $_SESSION["usuario"] == true;
}

function usuarioLogadoNome() 
{
    return $_SESSION["nome_completo"]; 

}
function usuarioLogadoCPF() 
{
    return $_SESSION["cpf"]; 

}
function usuarioLogadoData() 
{
    return $_SESSION["data_nascimento"]; 

}

function logarUsuario($usuario) 
{
    $_SESSION["usuario"] = true;
    $_SESSION['nome_completo'] = $usuario['nome_completo'];
    $_SESSION['cpf'] = $usuario['cpf'];
    $_SESSION['data_nascimento'] = $usuario['data_nascimento'];
}
?>