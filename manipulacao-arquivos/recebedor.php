<?php
echo '<pre>';
print_r($_FILES);

$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

if (in_array($_FILES['arquivo']['type'], $permitidos)) {
  $name = md5(time() . rand(0, 1000)) . '.jpg';
  move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $name);
  echo 'Arquivo salvo com sucesso';
} else {
  echo 'Arquivo não permitido';
}
echo '</pre>';