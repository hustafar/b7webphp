<?php
$array = [
  "nome" => "Rodrigo",
  "idade" => 25,
  "empresa" => "B7Web",
  "cor" => "Azul",
  "profissao" => "Fazedor de Bolo"
];

// // Alternativa
// if ( array_key_exists("idade", $array) ) {
if ( key_exists("idade", $array) ) {
  $idade = $array["idade"];
  echo $idade . " anos";
} else {
  echo "Não tem idade.";
}