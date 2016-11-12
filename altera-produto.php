<?php
  require_once("cabecalho.php");

  $categoria = new Categoria();
  $categoria->setId($_POST['categoria_id']);

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];
  $descricao = $_POST["descricao"];
  $isbn = $_POST['isbn'];
  $tipoProduto = $_POST['tipoProduto'];

  if (array_key_exists('usado', $_POST)) {
    $usado = "true";
  } else {
    $usado = "false";
  }

  if ($tipoProduto == "Livro") {
    $produto = new Livro($nome, $preco, $descricao, $categoria, $usado);
    $produto->setIsbn($isbn);
  } else {
    $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
  }

  $produto->setId($_POST['id']);

  $produtoDao = new ProdutoDao($conexao);

  if($produtoDao->alteraProduto($produto)){ ?>
    <p class="alert-success">Produto <?= $produto->getNome() ?> alterado com sucesso!</p>
  <?php  } else {
      $msg = mysqli_error($conexao);
  ?>
      <p class="alert-danger">Ocorreu um erro! O Produto <?= $produto->getNome() ?> não foi alterado: <?= $msg ?></p>
  <?php

  }

?>

  <a class="btn btn-info" href="lista-produto.php">Voltar</a>

<?php include("rodape.php") ?>
