<?php
if(!isset($_SESSION)){
    session_start();}

//usuario de Usários
if(isset($_POST['usuario'])){

  include('class/conexao.php');
  
  $erro = array();

  // Captação de dados
    $senha =@$_POST['senha'];
    $_SESSION['usuario'] = $conexao->escape_string($_POST['usuario']);

    // Validação de dados
    if(!filter_var($_SESSION['usuario'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";

    if(strlen($senha) < 6 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha as senha, section as valor 
        FROM administracao 
        WHERE usuario = '$_SESSION[usuario]'";
        $que = $conexao->query($sql) or die($conexao->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado.";

        elseif(strcmp($dado['senha'], ($senha)) == 0){
            $_SESSION['logado'] = $dado['valor'];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";

            if(count($erro) == 0){

                if (isset($_POST['usuario']) || isset($_POST['senha'])) {

                  $get = mysqli_query($conexao, "SELECT * FROM administracao WHERE usuario = '$usuario' AND senha = '$senha' " );
                  $num = mysqli_num_rows($get);
                  
                  echo "<script>location.href='administracao.php';</script>";
                    
                   
                    }
            }  
        }
    }




?>