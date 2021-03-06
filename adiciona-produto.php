<?php
  require_once("cabecalho.php");
  require_once("logica-usuario.php");

  verificaUsuario();

  $tipoProduto = $_POST['tipoProduto'];
  $categoria_id = $_POST['categoria_id'];

  $factory = new ProdutoFactory();
  $produto = $factory->criaPor($tipoProduto, $_POST);
  $produto->atualizaBaseadoEm($_POST);

  $produto->getCategoria()->setId($categoria_id);

  if(array_key_exists('usado', $_POST)) {
    $produto->setUsado("true");
  } else {
    $produto->setUsado("false");
  }

  $produtoDao = new ProdutoDao($conexao);

  if($produtoDao->insereProduto($produto)){ ?>
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
