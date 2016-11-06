<?php require_once("cabecalho.php");
      require_once("banco-categoria.php");
      require_once("logica-usuario.php");

      verificaUsuario();

  $produto = array(
    "nome" => "",
    "preco" => "",
    "descricao" => "",
    "categoria_id" => "1"
  );
  $usado = "";
  $categorias = listaCategorias($conexao);
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
