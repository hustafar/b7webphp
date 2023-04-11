<?php
  session_start();
  $expiracao = time() - 1;

  setcookie('nome', $nome, $expiracao);

  header("Location: ex-1.php");
  exit;
  ?>