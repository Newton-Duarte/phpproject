<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
      include("banco-produto.php");

  $id = $_GET['id'];
  $produto = buscaProduto($conexao, $id);

  $usado = $produto['usado'] ? "checked='checked'" : "";

  $categorias = listaCategorias($conexao);
?>

<h1>Alterando produto</h1>
<form action="altera-produto.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <input class="form-control" type="hidden" name="id" value="<?=$produto['id']?>" /><br/>
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" placeholder="Produto" /><br/>
      </div>
      <div class="form-group">
        <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" placeholder="Preço" /><br/>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="usado" <?=$usado?> value="true" />Usado
        </label>
      </div>
      <div class="form-group">
        <select name="categoria_id" class="form-control">        
          <?php foreach($categorias as $categoria) : 
            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
            $selecao = $essaEhACategoria ? "selected='selected'" : "";
          ?>          
            <option value="<?=$categoria['id']?>" <?=$selecao?>><?=$categoria['nome']?>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <textarea name="descricao" cols="15" rows="3" class="form-control" placeholder="Descrição..."><?=$produto['descricao']?></textarea><br/>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Alterar" />
      </div>
    </div>
  </div>  
</form>

<?php include("rodape.php") ?>