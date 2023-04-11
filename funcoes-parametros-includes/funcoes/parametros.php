<?php
function somar( int $n1, int $n2, int /* O & faz ele só aceitar uma variável e alterar ela fora da função */ &$n3 = 0 /*Define um valor padrão para o parametro */ ) {
  $total = $n1 + $n2 + $n3;
  return $total;
}

$x = 1;
$y = 2;
$total = 0;

echo somar(1, 2);
echo "<br>";
echo somar(1, 3);
echo "<br>";
echo somar($x, $y);
echo "<br>";
echo somar($x, $y, $total);