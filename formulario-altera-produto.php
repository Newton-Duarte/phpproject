<?php require_once("cabecalho.php");
      require_once("banco-categoria.php");
      require_once("banco-produto.php");

  $id = $_GET['id'];
  $produto = buscaProduto($conexao, $id);
  $categorias = listaCategorias($conexao);

  $selecao_usado = $produto->usado ? "checked='checked'" : "";
  $produto->usado = $selecao_usado;

?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <input type="hidden" name="id" value="<?=$produto->id?>">
      <?php include("produto-formulario-base.php") ?>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Alterar" />
      </div>
    </div>
  </div>
</form>

<?php include("rodape.php") ?>
