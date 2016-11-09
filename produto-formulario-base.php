<div class="form-group">
  <input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>" placeholder="Produto" />
</div>
<div class="form-group">
  <input class="form-control" type="number" name="preco" value="<?=$produto->getPreco()?>" placeholder="Preço" />
</div>
<div class="checkbox">
  <label>
    <input type="checkbox" name="usado" <?=$produto->isUsado()?> value="true" />Usado
  </label>
</div>
<div class="form-group">
  <select name="categoria_id" class="form-control">
    <?php
      foreach($categorias as $categoria) :
        $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
        $selecao = $essaEhACategoria ? "selected='selected'" : "";
    ?>
        <option value="<?=$categoria->getId()?>" <?=$selecao?>><?=$categoria->getNome()?>
    <?php
      endforeach
    ?>
  </select>
</div>
<div class="form-group">
  <textarea name="descricao" cols="15" rows="3" class="form-control" placeholder="Descrição..."><?=$produto->getDescricao()?></textarea><br/>
</div>
