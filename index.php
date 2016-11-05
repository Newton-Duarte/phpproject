<?php include 'cabecalho.php' ?>

<div class="row">
  <h1>Minha Loja</h1>
</div>

<div class="row">
  <?php 
    if (isset($_COOKIE["usuario_logado"])) {
  ?>
    <p class="text-success">Você está logado como <?=$_COOKIE["usuario_logado"]?></p>    
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

<?php if (isset($_GET["login"]) && $_GET["login"]==1) {
?>
  <p class="alert-success">Logado com sucesso!</p>
<?php 
}
 ?>

<?php if (isset($_GET["login"]) && $_GET["login"]==0) {
?>
  <p class="alert-danger">Usuario ou senha invalida!</p>
<?php 
}
?>

<?php include 'rodape.php' ?>
