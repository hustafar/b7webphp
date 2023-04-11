<?php

  $lista = [ 'nome1', 'nome2', 'nome3', 'nome4' ];
  $listaNomes = [ 'Rodrigo', 'Pedro', 'Paulo', 'José', 'Francisca', 'Paula' ];

  $aprovados = [ 'Rodrigo', 'Pedro', 'José', 'Francisca' ];
  $reprovados = array_diff($listaNomes, $aprovados);

  $numeros = [ 10, 20, 24, 91, 18 ];
  $numerosFiltrados = array_filter($numeros, function($numero) {
    return $numero < 30;
  });
  $numerosMapeados = array_map(function($numero) {
    return $numero * 2;
  }, $numeros);

  echo "Conta o número de items em um array: " . count($lista) . "<br>";
  echo "<br>Filtra items que não estão na segunda lista: ";
  print_r($reprovados);
  echo "<br><br>Filtra uma array de acordo com o retorno da função: ";
  print_r($numerosFiltrados);
  echo "<br><br>Mapea uma array de acordo com o retorno da função: ";
  print_r($numerosMapeados);
  echo "<br><br>Resultado da array antes do pop e shift: ";
  print_r($numeros);
  echo "<br><br>Remove o ultimo item de uma array e retorna ele: " . array_pop($numeros) . "<br>";
  echo "<br>Remove o primeiro item de uma array e retorna ele: " . array_shift($numeros) . "<br>";
  echo "<br>Resultado da array após do pop e shift: ";
  print_r($numeros);
  $existe = in_array(91, $numeros) ? "Existe" : "Não existe";
  echo "<br><br>Procura se um valor existe em uma array: " . $existe;
  echo "<br><br>Procura o index de um valor em um array: " . array_search(91, $numeros);
  rsort($numeros); // Ordena decrescente
  asort($numeros); // Ordena sem alterar a chave de posição da array
  sort($numeros);
  echo "<br><br>Ordena uma array: ";
  print_r($numeros);

  $nomes = [ 'Rodrigo', 'Talansky', 'Xavier'];
  $nome = implode(' ', $nomes);

  echo "<br><br>Junta itens de um array em uma string: " . $nome;

  echo "<script>console.log(`";
  print_r($numeros);
  echo "`)</script>";