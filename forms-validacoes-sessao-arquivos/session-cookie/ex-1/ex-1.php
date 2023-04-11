<?php 
  if (is_null($_COOKIE["nome"])) {
    header("Location: ex-1-cad-nome.php");
  }
  echo "<h1>Olá, " . $_COOKIE["nome"] . "</h1> <a href='ex-1-delete-nome.php'>Sair</a>"
?>