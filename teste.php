<?php require_once("conexaoBanco.php");
require_once("conexaoverificacao2.php");
require_once("verifica-usuario.php");


//  $host ="localhost";
//  $user = "Admin";
//  $pass ="admin";
//  $banco="academici";
//  $conexao = @mysqli_connect($host, $user, $pass) or die(mysqli_error());
//  mysqli_select_db($conexao,$banco) or die (mysqli_error());
//  $nome_completo = $_POST['nome_completo'];
//  $cpf = $_POST['cpf'];
//  $data_nascimento= $_POST['data_nascimento'];
 


$usuario = carregarInfo($conexao, $_POST['nome_completo'], $_POST['cpf'], $_POST['data_nascimento']);

if($usuario == null) {  

    // echo "<script>
    
    // app.post ( ' / ' , (req , res) => {
    //     let dados = {
    //       nome_completo: req.corpo.nome_completo,
    //       cpf: req.corpo.cpf,
    //       data_nascimento: req.corpo.data_nascimento
          
    //     };
      
    //     // validation
    //     if (!dados.nome_completo  ||  !dados.cpf  ||  !dados.data_nscimento) {
    //       res.status( 400 ).enviar ('É necessário digitar Nome completo, cpf e Data Nascimento');
    //       retorno ;
    //     }
    
    
    
    // </script>";
    header("Location: verificacaoacesso.php");
    
    exit();
} 
    logarUsuario($usuario);
    header("Location: verificacaoacesso2.php");

die();
?>