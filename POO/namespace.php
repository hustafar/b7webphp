<?php
  require('namespace-classe1.php');
  require('namespace-classe2.php');

  $a = new classe1\MinhaClasse();
  echo $a->testar();

  echo '<br />';

  $b = new classe2\MinhaClasse();
  echo $b->testar();

  // // // // // // 

  require('classes/matematica/basico.php');
  use classes\matematica\Basico;
  
  echo '<br />';

  $basico = new Basico();
  echo $basico->testar();
