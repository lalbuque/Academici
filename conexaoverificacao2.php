<?php require_once("conexaoBanco.php");

function carregarInfo($conexao, $nome_completo, $cpf, $data_nascimento ) 
{
    
    $query = "SELECT * FROM alunos 
            WHERE nome_completo = '{$nome_completo}' AND cpf = $cpf 
            AND data_nascimento = $data_nascimento";
    $busca_query = mysqli_query($conexao, $query);
    $alunos = mysqli_fetch_assoc($busca_query);

    return $alunos;
    
}




// $nome_completo = @$_GET ['nome_completo'];
// $cpf = @$_GET ['cpf'];
// $data_nascimento= @$_GET ['data_nascimento'];


// $busca_query = mysqli_query($conexao,"SELECT * FROM alunos 
// WHERE nome_completo LIKE '%$nome_completo%' AND cpf = '%$cpf%' 
// AND data_nascimento = '%$data_nascimento%'")or die(mysqli_error());//faz a busca com as palavras enviad

// if (isset($busca_query)) { //Se nao achar nada, lança essa mensagem
//     echo "Nenhum registro encontrado.";
// }

// function carregarDados($conexao) { 
//     $dados = array();
//     $query = "SELECT * FROM alunos";
//     $resultado = mysqli_query($conexao, $query);
//         while ($row = mysqli_fetch_assoc($resultado))
//         {
//         $dados[] = $row;
//         }
//     return $dados;
//     }
    
?>
