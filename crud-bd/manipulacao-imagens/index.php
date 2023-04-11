<?php
  $imagem = imagecreatetruecolor(300, 300);

  $cor = imagecolorallocate($imagem, 255, 0, 0);
  imagefill($imagem, 0, 0, $cor);

  // imagejpeg($imagem, 'nova_imagem.jpeg', 100);
  // imagepng($imagem, null);?>

<div style="display: flex; flex-direction: column;">
  <a target="_blank" href="resize.php">Resize </a>
  <a target="_blank" href="crop.php">Crop</a>
</div 
