<?php

session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
  $arquivo = file_get_contents('nomes.txt');
  $arquivo .= "\n" . $nome;
  file_put_contents('nomes.txt', $arquivo);
} else {
  $_SESSION['erro'] = "É necessário um nome para cadastrar";
}

header("Location: index.php")

?>