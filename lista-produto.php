<?php
  require_once("cabecalho.php");
?>

  <h1>Lista de Produtos</h1>
  <table class="table table-striped table-bordered">

    <?php
      $produtoDao = new ProdutoDao($conexao);
      $produtos = $produtoDao->listaProdutos();
      foreach ($produtos as $produto) :
    ?>
    <tr>
      <td><?= $produto->getNome() ?></td>
      <td>R$ <?= $produto->getPreco() ?></td>
      <td>R$ <?= $produto->calculaImposto() ?></td>
      <td><?= substr($produto->getDescricao(), 0, 40) ?></td>
      <td><?= $produto->getCategoria()->getNome() ?></td>
      <td>
        <?php
          if ($produto->temIsbn()) {
            echo "ISBN: ".$produto->getisbn();
          }
        ?>
      </td>
      <td>
        <a class="btn btn-xs btn-info" href="formulario-altera-produto.php?id=<?= $produto->getId() ?>">Alterar</a>
      </td>
      <td>
        <form action="remove-produto.php" method="post">
          <input type="hidden" name="id" value="<?=$produto->getId()?>">
          <button class="btn btn-xs btn-danger">Remover</button>
        </form>
      </td>
    </tr>
    <?php
      endforeach
    ?>
  </table>

<?php include("rodape.php") ?>
