<?php
// Destinatário
$para = "webacademici@gmail.com";

// Assunto do e-mail
$assunto = "Contato do através do site ...";

// Campos do formulário de contato
$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "nome_completo: $nome_completo ";
$corpo .= "email: $email telefone: $telefone mensagem: $mensagem";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $email", 
"Reply-To: $assunto", "Subject: $assunto", "Return-Path: $email", 
"MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($nome_completo) && !empty($email) && !empty($mensagem)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');</script>";
    echo "<script>location.href='index.php';</script>";
} else {    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');</script>";
    echo "<script>location.href='index.php';</script>";
}
?>