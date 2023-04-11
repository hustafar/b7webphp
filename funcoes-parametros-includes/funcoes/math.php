<?php
$numero = -8.645;
$lista = [1, 4, 9, 8];

echo "Absoluto: " . abs($numero) . "<br>";
echo "PI: " . pi() . "<br>";
echo "Arredonda para baixo: " . floor(abs($numero)) . "<br>";
echo "Arredonda para cima: " . ceil(abs($numero)) . "<br>";
echo "Arredonda acima de 6: " . round(abs($numero)) . "<br>";
echo "Arredonda e define numero de casas decimais: " . round(abs($numero), 2) . "<br>";
echo "Aleatório: " . rand(3, 9) . "<br>";
echo "Maior número da lista: " . max($lista) . "<br>";
echo "Menor número da lista: " . min($lista) . "<br>";