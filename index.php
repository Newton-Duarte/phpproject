<?php require_once('cabecalho.php');
      require_once("logica-usuario.php");
?>

<div class="row">
  <h1>Minha Loja</h1>
</div>

<div class="row">
  <?php
    if (usuarioEstaLogado()) {
  ?>
    <p class="text-success">Você está logado como <?=usuarioLogado()?></p>
    <a class="btn btn-danger" href="logout.php">Logout</a>
  <?php
    } else {
  ?>
  <div class="col-md-6 col-md-offset-3">
    <form action="login.php" method="post">

      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="E-mail">
      </div>

      <div class="form-group">
        <input type="password" name="senha" class="form-control" placeholder="Senha">
      </div>

      <div class="form-group">
        <input type="submit" value="Entrar" class="btn btn-lg btn-primary">
      </div>

    </form>
  </div>
  <?php
    }
   ?>
</div>

<?php include 'rodape.php' ?>
