<?php
// Destinatário
$para = "webacademici@gmail.com";

// Assunto do e-mail
$assunto = "Contato do Academici";

// Campos do formulário de contato
$email = @$_POST['email'];
$assunto= @$_POST['assunto'];
$mensagem = @$_POST['mensagem'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "assunt: $assunto ";
$corpo .= "email: $email mensagem: $mensagem";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: $para", 
"Reply-To: $email", "Subject: $assunto", "Return-Path: $email", 
"MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($assunt) && !empty($email) && !empty($mensagem)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');</script>";
    echo "<script>location.href='perfilaluno.php';</script>";
    
} else {$msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');</script>";
    echo "<script>location.href='perfilaluno.php';</script>";
}
?>
