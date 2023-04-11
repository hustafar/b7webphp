<?php

$traco = '';

for( $i = 1; $i <= 10; $i++ ) {
  $traco .= '-';
}

for ( $i = 1; $i <= 10; $i++ ) {
  echo "<p>" . $traco . "</p>";
}