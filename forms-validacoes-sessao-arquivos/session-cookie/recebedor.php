<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

// // ALGUNS TIPOS DE FILTER

// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_URL

// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_URL
// FILTER_SANITIZE_NUMBER_INT

$sobrenome = 'Talansky';
// FILTRAR VARIÁVEL
filter_var($sobrenome, FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome && $email && $idade) {

  $expiracao = time() + (86400 * 30);

  setcookie('nome', $nome, $expiracao);

  echo 'Nome: ' . $nome . '<br />';
  echo 'E-mail: ' . $email . '<br />';
  echo 'Idade: ' . $idade;
} else {
  $_SESSION['aviso'] = 'Preencha os itens corretamente!';

  header("Location: index.php");
  exit;
}
?>