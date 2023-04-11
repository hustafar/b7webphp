<?php
session_start();
require('header.php');

if ($_SESSION['aviso']) {
  echo $_SESSION['aviso'];
  $_SESSION['aviso'] = '';
}

if (isset($_COOKIE['nome'])) {
  echo '<a href="apagar.php">Apagar Cookie de Nome</a>';
}
?>

<form method="POST" action="recebedor.php">
  <label for="nome">
    Nome:
    <br />
    <input type="text" name="nome">
  </label>
  <br />
  <br />
  <label for="nome">
    E-mail:
    <br />
    <input type="text" name="email">
  </label>
  <br />
  <br />
  <label for="nome">
    Idade:
    <br />
    <input type="number" name="idade">
  </label>
  <br />
  <br />

  <input type="submit" value="Enviar">
</form>