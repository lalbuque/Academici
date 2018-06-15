<?php
$host = "localhost";
$usuario = "Admin";
$senha = "admin";
$bd = "academici";

mysqli_connect($host, $usuario, $senha) or die(mysqli_connect_error());
// mysqli_select_db($bd) or die (mysqli_error());

if(isset($_POST ['email']) && isset($_POST['senha'])){
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

    $get = mysqli_query("SELECT * FROM user WHERE email = '$email' AND senha= '$senha' ");
    $num = mysqli_num_rows($get);

    if($num == 1){
            while($percorrer= mysqli_fetch_array($get)){
                $adm = $percorrer ['$adm'];

                if ($adm == 1){
                        echo 'usuario administrador';
                 }else { 
                        echo 'usuario normal';
            }
         }
}else {
    echo 'email nao encontrado';
}
}
?>
