<?php
  require_once("cabecalho.php");
  require_once("banco-produto.php");
?>
  <table class="table table-striped table-bordered">

    <?php
      $produtos = listaProdutos($conexao);
      foreach ($produtos as $produto) :
    ?>
    <tr>
      <td><?= $produto->nome ?></td>
      <td>R$ <?= $produto->preco ?></td>
      <td><?= substr($produto->descricao, 0, 40) ?></td>
      <td><?= $produto->categoria->nome ?></td>
      <td>
        <a class="btn btn-xs btn-info" href="formulario-altera-produto.php?id=<?=$produto->id?>">Alterar</a>
      </td>
      <td>
        <form action="remove-produto.php?id=<?=$produto->id?>" method="post">
          <input type="hidden" name="id" value="<?=$produto->id?>">
          <button class="btn btn-xs btn-danger">Remover</button>
        </form>
      </td>
    </tr>
    <?php
      endforeach
    ?>
  </table>

<?php include("rodape.php") ?>
