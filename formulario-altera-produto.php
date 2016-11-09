<?php
  require_once("cabecalho.php");

  $id = $_GET['id'];
  $produtoDao = new ProdutoDao($conexao);
  $produto = $produtoDao->buscaProduto($id);

  $categoriaDao = new CategoriaDao($conexao);
  $categorias = $categoriaDao->listaCategorias();

  $selecao_usado = $produto->isUsado() ? "checked='checked'" : "";
  $produto->setUsado($selecao_usado);

?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <input type="hidden" name="id" value="<?=$produto->getId()?>">
      <?php include("produto-formulario-base.php") ?>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Alterar" />
      </div>
    </div>
  </div>
</form>

<?php include("rodape.php") ?>
