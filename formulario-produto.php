<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("logica-usuario.php");

      verificaUsuario();

  $categorias = listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <input class="form-control" type="text" name="nome" placeholder="Produto" /><br/>
      </div>
      <div class="form-group">
        <input class="form-control" type="number" name="preco" placeholder="Preço" /><br/>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="usado" value="true" />Usado
        </label>
      </div>
      <div class="form-group">
        <select name="categoria_id" class="form-control">        
          <?php foreach($categorias as $categoria) : ?>          
            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <textarea name="descricao" cols="15" rows="3" class="form-control" placeholder="Descrição..."></textarea><br/>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Cadastrar" />
      </div>
    </div>
  </div>  
</form>

<?php include("rodape.php") ?>