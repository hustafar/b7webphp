<?php

  $senha = '12345';

  // Forma mais indicada
  $hash = password_hash($senha, PASSWORD_DEFAULT);
  
  $hash2 = password_hash($senha, PASSWORD_BCRYPT);
  $hash3 = md5($senha);

  echo $senha."<br />";
  echo $hash."<br />";
  echo $hash2."<br />";
  echo $hash3."<br />";

  
  if (password_verify($senha, $hash)) {
    echo 'Senha correta';
  } else {
    echo 'Senha errada';
  }
  
  echo "<br />";
  
  if (password_verify($senha, $hash2)) {
    echo 'Senha correta';
  } else {
    echo 'Senha errada';
  }
  
  echo "<br />";
  
  if (md5($senha) == $hash3) {
    echo 'Senha correta';
  } else {
    echo 'Senha errada';
  }
?>
