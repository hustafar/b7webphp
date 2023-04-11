<?php

// $array = range(1, 20, 2);
$array = range('a', 'g');

foreach( $array as $item ) {
  echo "Item: " . $item . "<br>";
}