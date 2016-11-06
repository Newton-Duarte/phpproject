<?php
  require_once("cabecalho.php");
  require_once("banco-produto.php");

  $id = $_POST['id'];
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $descricao = $_POST["descricao"];
  $categoria_id = $_POST["categoria_id"];

  if (array_key_exists('usado', $_POST)) {
    $usado = "true";
  } else {
    $usado = "false";
  }

  if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
    <p class="alert-success">Produto <?= $nome; ?> alterado com sucesso!</p>
  <?php  } else {
      $msg = mysqli_error($conexao);
  ?>
      <p class="alert-danger">Ocorreu um erro! O Produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
  <?php

  }

?>

  <a class="btn btn-info" href="lista-produto.php">Voltar</a>

<?php include("rodape.php") ?>
