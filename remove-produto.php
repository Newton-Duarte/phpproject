<?php
  require_once("cabecalho.php");
  require_once("banco-produto.php");
  require_once("logica-usuario.php");
  require_once("class/Produto.php");

  $produto = new Produto();

  $produto->id = $_POST['id'];
  removeProduto($conexao, $produto);
  $_SESSION["success"] = "Produto removido com sucesso.";
  header("Location: lista-produto.php");
  die();
?>
