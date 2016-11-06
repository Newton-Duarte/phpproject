<?php
  error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php");
?>

<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loja.css">
  <title>Minha Loja</title>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">Minha Loja</a>
      </div>
      <div>
        <ul class="nav navbar-nav">
          <li><a href="formulario-produto.php">Adiciona Produto</a></li>
          <li><a href="lista-produto.php">Produtos</a></li>
          <li><a href="contato.php">Contato</a></li>
          <li><a href="sobre.php">Sobre</a></li>
        </ul>
      </div>
    </div><!-- Fim do container -->
  </div>

  <div class="container">
    <div class="principal">
      <?php mostraAlerta("success"); ?>
      <?php mostraAlerta("danger"); ?>
