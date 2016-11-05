<?php

function verificaUsuario() {
  if (!usuarioEstaLogado()) {
    header("Location: index.php?falhaDeSeguranca=true");
    die();
  }
}