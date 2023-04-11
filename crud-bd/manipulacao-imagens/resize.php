<?php

  $arquivo = 'abc.jpg';
  $maxWidth = 200;
  $maxHeight = 200;

  // Recebe um array com as informações da imagem e retira width e height
  list($originalWidth, $originalHeight) = getimagesize($arquivo);

  // Pega qual é a proporção da imagem original
  $ratio = $originalWidth / $originalHeight;
  // Pega a proporção desejada de acordo com a configuração inicial
  $ratioDest = $maxWidth / $maxHeight;

  $finalWidth = 0;
  $finalHeight = 0;

  // Verifica se a imagem está em retrato ou paisagem e modifica para o ratio desejado
  if ($ratioDest > $ratio ) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
  } else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
  }

  // Cria uma imagem vazia com as proporções calculadas acima
  $imagem = imagecreatetruecolor($finalWidth, $finalHeight);
  // Pega coloca o conteúdo da imagem original em uma variável
  $originalImg = imagecreatefromjpeg($arquivo);

  // Copia a imagem original para a vazia redimencionada para as proporções calculadas
  imagecopyresampled(
    $imagem, 
    $originalImg, 
    0, 0, 0, 0, 
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
  );

  // Define o cabeçado como um arquivo de imagem
  header("Content-Type: image/jpeg");
  // Imprime a imagem redimencionada para visualização
  imagejpeg($imagem, null, 100);
