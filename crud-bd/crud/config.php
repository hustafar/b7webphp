<?php
  $dbName = 'test';
  $dbHost = 'localhost';
  $dbUser = 'root';
  $dbPass = '';

  $pdo = new PDO("mysql:dbname=" . $dbName . ";host=" . $dbHost . "", $dbUser, $dbPass);

