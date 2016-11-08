<?php
  require_once("cabecalho.php");
  require_once("banco-produto.php");
  require_once("logica-usuario.php");
  require_once("class/Produto.php");
  require_once("class/Categoria.php");

  verificaUsuario();

  $produto = new Produto();
  $categoria = new Categoria();
  $categoria->id = $_POST['categoria_id'];

  $produto->nome = $_POST['nome'];
  $produto->preco = $_POST['preco'];
  $produto->descricao = $_POST['descricao'];
  $produto->categoria = $categoria;

  if(array_key_exists('usado', $_POST)) {
    $produto->usado = "true";
  } else {
    $produto->usado = "false";
  }

  if(insereProduto($conexao, $produto)){ ?>
    <p class="alert-success">Produto <?= $produto->nome; ?> Preço: <?= $produto->preco; ?> reais, adicionado com sucesso!</p>
  <?php  } else {
      $msg = mysqli_error($conexao);
  ?>
      <p class="alert-danger">Ocorreu um erro! O Produto <?= $produto->nome; ?> não foi adicionado: <?= $msg ?></p>
  <?php

  }

?>

  <a class="btn btn-info" href="formulario-produto.php">Voltar</a>

<?php include("rodape.php") ?>
