<div class="form-group">
  <input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>" placeholder="Produto" />
</div>
<div class="form-group">
  <input class="form-control" type="number" name="preco" value="<?=$produto->getPreco()?>" placeholder="Preço" step="0.1" />
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
  <select name="tipoProduto" class="form-control">
    <optgroup label="Livros">
    <?php
      $tipos = array("Livro Fisico", "Ebook");
      foreach($tipos as $tipo) :
        $tipoSemEspaco = str_replace(" ", "", $tipo);
        $esseEhOTipo = get_class($produto) == $tipoSemEspaco;
        $selecaoTipo = $esseEhOTipo ? "selected='selected'" : "";
    ?>
    <option value="<?=$tipoSemEspaco?>" <?=$selecaoTipo?>>
      <?=$tipo?>
    </option>
      <?php
        endforeach
      ?>
    </optgroup>
  </select>
</div>
<div class="form-group">
  <input class="form-control" type="text" name="isbn" value="<?php if ($produto->temIsbn()) { echo $produto->getIsbn(); } ?>" placeholder="ISBN">
</div>
<div class="form-group">
  <input class="form-control" type="text" name="taxaImpressao" value="<?php if ($produto->temTaxaImpressao()) { echo $produto->getTaxaImpressao(); } ?>" placeholder="Taxa de Impressao">
</div>
<div class="form-group">
  <input class="form-control" type="text" name="waterMark" value="<?php if ($produto->temWaterMark()) { echo $produto->getWaterMark(); } ?>" placeholder="Water Mark">
</div>
<div class="form-group">
  <textarea name="descricao" cols="15" rows="3" class="form-control" placeholder="Descrição..."><?=$produto->getDescricao()?></textarea><br/>
</div>
