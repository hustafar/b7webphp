<?php

$array = [
  "nome" => "Rodrigo",
  "idade" => 25,
  "empresa" => "B7Web",
  "cor" => "Azul",
  "profissao" => "Fazedor de Bolo"
];

$chaves = array_keys($array);
print_r($chaves);

$valores = array_values($array);
print_r($valores);
