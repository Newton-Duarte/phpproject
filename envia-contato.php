<?php
  session_start();
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  require_once("PHPMailerAutoload.php");

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp-mail.outlook.com';
  $mail->Port = 587;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Username = ""; //Colocar o email que ira enviar o email
  $mail->Password = ""; //Colocar a senha do email que ira enviar o email

  $mail->setFrom("{$email}", "Alura Curso PHP e MYSQL");
  $mail->addAddress(""); //Colocar email que vai receber o email enviado
  $mail->Subject = "Email de contato da loja";
  $mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
  $mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

  if ($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
  } else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
  }
  die();
