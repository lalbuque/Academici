<?php require_once("conexao.php");

function carregarDados($conexa) { 
$dados = array();
$query = "SELECT * FROM dados";
$resultado = mysqli_query($conexa, $query);
    while ($row = mysqli_fetch_assoc($resultado]))  
    {
    $dados[] = $row;
    }
return $dados;
}

?>


<?php require_once("funcoes.php");

$listar = carregarDados($conexa)
foreach($listar as $lista)
{
?> 
<input type="text" name="dados" value="<?= $lista["RA"]?>">

<?php
}

?>