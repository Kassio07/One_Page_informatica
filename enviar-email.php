<?php

$formulario = isset($_POST['formulario']) ? $_POST['formulario'] : "";

// HOME - NEWSLATTER
if ($formulario == "newsletter") {

 $email = trim($_POST['email']);

 if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "<p class='success'>E-mail enviado com sucesso!</p>";
 } else {
  echo "<p class='error'>Digite um e-mail válido.</p>";
 }

 // FALE CONOSCO
} else if ($formulario == "fale_conosco") {

 $nome = trim($_POST['nome']);
 $email = trim($_POST['email']);
 $telefone = trim($_POST['telefone']);
 $interesse = trim($_POST['interesse']);
 $mensagem = trim($_POST['message']);

 echo $interesse;

 $destinatario = "santoskassio562@gmail.com";
 $assunto = "Serviço de Informática";

 $corpoEmail = "
Nome: $nome
E-mail: $email
Telefone: $telefone
Interesse: $interesse
Mensagem: $mensagem
";

 $headers = "From: " . $email;

 if (mail($destinatario, $assunto, $corpoEmail, $headers)) {
  echo "<p class='success'>E-mail enviado com sucesso! K7 informática agradeçe o contato. Em breve entraremos em contato.</p>";
 } else {
  echo "<p class='error'>Erro ao enviar e-mail.</p>";
 }
}
