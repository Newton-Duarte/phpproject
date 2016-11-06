<?php require_once("cabecalho.php"); ?>

<h1>Envia E-mail</h1>
<form action="envia-contato.php" method="post">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="form-group">
        <input class="form-control" type="text" name="nome" placeholder="Nome" />
      </div>
      <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="E-mail" />
      </div>
      <div class="form-group">
        <textarea class="form-control" name="mensagem" placeholder="Mensagem..." cols="15" rows="3"></textarea>
      </div>
      <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </div>
    </div>
  </div>
</form>

<?php require_once("rodape.php"); ?>
