<div class="form-group">
  <input class="form-control" type="hidden" name="id" value="<?=$produto->id?>" />
</div>
<div class="form-group">
  <input class="form-control" type="text" name="nome" value="<?=$produto->nome?>" placeholder="Produto" />
</div>
<div class="form-group">
  <input class="form-control" type="number" name="preco" value="<?=$produto->preco?>" placeholder="Preço" />
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="usado" <?=$usado?> value="true" />Usado
  </label>
</div>
<div class="form-group">
  <select name="categoria_id" class="form-control">
    <?php foreach($categorias as $categoria) :
      $essaEhACategoria = $produto->categoria->id == $categoria->id;
      $selecao = $essaEhACategoria ? "selected='selected'" : "";
    ?>
      <option value="<?=$categoria->id?>" <?=$selecao?>><?=$categoria->nome?>
    <?php endforeach ?>
  </select>
</div>
<div class="form-group">
  <textarea name="descricao" cols="15" rows="3" class="form-control" placeholder="Descrição..."><?=$produto->descricao?></textarea><br/>
</div>
