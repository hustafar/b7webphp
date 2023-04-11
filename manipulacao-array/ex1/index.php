<style>
  table, th, td {
    border: 1px solid black;
  }
</style>

<?php

$array = [
  "nome" => "Rodrigo",
  "idade" => 25,
  "empresa" => "B7Web",
  "cor" => "Azul",
  "profissao" => "Fazedor de Bolo"
];

$keys = array_keys($array);
$values = array_values($array);

echo "<table>";

// // Feito pelo professor
// foreach ( $array as $chave => $valor )
for ( $i = 0; $i < count($array); $i++ ) {
  echo "<tr>";
  echo "<th>" . $keys[$i] . "</th>";
  echo "<td>" . $values[$i] . "</td>";
  echo "</tr>";
}

echo "</table>";