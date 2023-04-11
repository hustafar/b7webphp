<?php

  $arquivo = 'abc.jpg';
  $width = 300;
  $height = 300;

  // Recebe um array com as informações da imagem e retira width e height dele
  list($originalWidth, $originalHeight) = getimagesize($arquivo);

  // Pega qual é a proporção da imagem original
  $ratio = $originalWidth / $originalHeight;
  // Pega a proporção desejada de acordo com a configuração inicial
  $ratioDest = $width / $height;

  $finalWidth = 0;
  $finalHeight = 0;
  $finalX = 0;
  $finalY = 0;

  // Verifica se a imagem está em retrato ou paisagem e modifica para o ratio desejado
  if ($ratioDest > $ratio ) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
  } else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
  }

  // Verifica se a largura da imagem é maior do que a largura final calculada
  if ($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    // Calcula o offset da imagem para ela ficar centralizada
    $finalY = -(($finalHeight - $height) / 2);
  } else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;
    
    // Calcula o offset da imagem para ela ficar centralizada
    $finalX = -(($finalWidth - $width) / 2);
  }

  // Cria uma imagem vazia com as proporções calculadas acima
  $imagem = imagecreatetruecolor($width, $height);
  // Pega coloca o conteúdo da imagem original em uma variável
  $originalImg = imagecreatefromjpeg($arquivo);

  // Copia a imagem original para a vazia redimencionada para as proporções calculadas
  imagecopyresampled(
    $imagem, 
    $originalImg, 
    $finalX, $finalY, 0, 0, 
    $finalWidth, $finalHeight, 
    $originalWidth, $originalHeight
  );

  // Define o cabeçado como um arquivo de imagem
  header("Content-Type: image/jpeg");
  // Imprime a imagem redimencionada para visualização
  imagejpeg($imagem, null, 100);
