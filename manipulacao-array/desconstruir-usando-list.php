<?php

$array = [ 'Bonieky', 90, 'Café', 'azul' ];

list($nome, $idade, $bebida, $cor) = $array;

// $nome = $array[0];
// $idade = $array[1];
// $bebida = $array[2];
// $cor = $array[3];

echo $nome . " tem " . $idade . " anos e gosta de tomar " . $bebida . " com a cor " . $cor;