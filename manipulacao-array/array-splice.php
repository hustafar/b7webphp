<?php

$array = [ "a", "b", "c", "d", "e", "f" ];

$array2 = [ "K", "L", "N"];

$retorno = array_splice( $array, 1, 1, $array2);

print_r($array);

echo "<br>";

print_r($retorno);