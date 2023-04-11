<?php

$data = "2022-01-11";

echo "Pega a quantidade de segundos passados desde o dia 01/01/1970: " . time() . "<br><br>";
echo date("d/m/Y H:i:s") . "<br><br>";
$time = strtotime($data);
echo "Passa uma data para a quantidade de segundos passados desde o dia 01/01/1970: " . $time . "<br><br>";
echo "Converte uma data de segundos para uma data padrão: " . date("d/m/Y", $time);