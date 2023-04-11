<?php
$texto = file_get_contents("texto.txt");
$texto .= "\nRodrigo Talansky";
file_put_contents("texto.txt", $texto);