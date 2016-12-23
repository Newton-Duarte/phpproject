<?php
  require_once("cabecalho.php");
  require_once("logica-usuario.php");

  verificaUsuario();

  $categoria = new Categoria();
  $categoria->setId(1);

  $produto = new LivroFisico("", "", "", $categoria, "");

  $categoriaDao = new CategoriaDao($conexao);
  $categorias = $categoriaDao->listaCategorias();
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <?php include("produto-formulario-base.php") ?>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Cadastrar" />
      </div>
    </div>
  </div>
</form>

<?php include("rodape.php") ?>
