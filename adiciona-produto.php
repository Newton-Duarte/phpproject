<?php
  require_once("cabecalho.php");
  require_once("banco-produto.php");
  require_once("logica-usuario.php");
  require_once("class/Produto.php");
  require_once("class/Categoria.php");

  verificaUsuario();

  $categoria = new Categoria();
  $categoria->setId($_POST['categoria_id']);

  $nome = $_POST['nome'];
  $preco = $_POST['preco'];
  $descricao = $_POST['descricao'];

  if(array_key_exists('usado', $_POST)) {
    $usado = "true";
  } else {
    $usado = "false";
  }

  $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);

  if(insereProduto($conexao, $produto)){ ?>
    <p class="alert-success">Produto <?= $produto->getNome() ?> Preço: <?= $produto->getPreco() ?> reais, adicionado com sucesso!</p>
  <?php  } else {
      $msg = mysqli_error($conexao);
  ?>
      <p class="alert-danger">Ocorreu um erro! O Produto <?= $produto->getNome() ?> não foi adicionado: <?= $msg ?></p>
  <?php

  }

?>

  <a class="btn btn-info" href="formulario-produto.php">Voltar</a>

<?php include("rodape.php") ?>
