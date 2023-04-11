<?php

class Matematica {

  public static string $nome = 'Rodrigo';

  public static function somar($x, $y) {
    return $x + $y;
  }

}

echo Matematica::somar( 10, 20 ) . '<br>';
echo Matematica::$nome;