<?php
if(!isset($_SESSION)){
    session_start();}

//usuario de Usários
if(isset($_POST['usuario'])){

  include('class/conexao.php');
  
  $erro = array();

  // Captação de dados
    $senha =@$_POST['senha'];
    $_SESSION['usuario'] = $mysqli->escape_string($_POST['usuario']);

    // Validação de dados
    if(!filter_var($_SESSION['usuario'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";

    if(strlen($senha) < 6 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha as senha, section as valor 
        FROM usuarios 
        WHERE usuario = '$_SESSION[usuario]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado.";

        elseif(strcmp($dado['senha'], ($senha)) == 0){
            $_SESSION['logado'] = $dado['valor'];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";

            if(count($erro) == 0){

                if (isset($_POST['usuario']) || isset($_POST['senha'])) {

                  $get = mysqli_query($bd, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' " );
                  $num = mysqli_num_rows($get);
                  
                  
                    if ($num == 1) {
                        echo 'usuario existe';
                    }
                    else{
                        echo 'o usuario nao existe'; 
                    }
                    // while($percorrer = mysqli_fetch_array($get)){
                    //     $nivel_usuario = $percorrer['nivel_usuario'];

                    //     if($nivel_usuario == 1){
                    //         echo "<script>location.href='perfilaluno.php';</script>";
                    //         exit();
                    //         unset($_SESSION['usuario']);
                    //     }
                    // }                
                }
            }  
        }
    }




?>