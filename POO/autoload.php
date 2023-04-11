<?php
  // essa função é ativada quando se tenta usar uma classe não registrada
  spl_autoload_register(function($class) {
    $fileName = 'classes/' . $class . '.php';
    if(file_exists($fileName)) {
      require $fileName;
    }
  });

  $m = new Matematica();
  echo $m->somar(10, 20);

  $x = new Algo();