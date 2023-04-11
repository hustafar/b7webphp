<?php
  require 'config.php';

  $name = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if ($name && $email) { 
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() === 0){
      $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
      // Associa ao VALOR da variável
      $sql->bindValue(':name', $name);
      // Associa a REFERENCIA da variável, caso altere o valor da variável, também alterará para o bind
      $sql->bindParam(':email', $email);
      $sql->execute();

      header("Location: read.php");
      exit;
    } else {
      header("Location: create.php");
      exit;
    }
  } else {
    header("Location: create.php");
    exit;
  }
