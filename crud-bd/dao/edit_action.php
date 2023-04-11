<?php
  require 'config.php';
  require 'dao/UsuarioDAOMysql.php';

  $usuarioDao = new UsuarioDAOMysql($pdo);

  $id = filter_input(INPUT_POST, 'id');
  $name = filter_input(INPUT_POST, 'name');
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

  if ($id && $name && $email) { 
    $usuario = $usuarioDao->findById($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);

    header('Location: index.php');
    exit;

  } else {
    header("Location: edit.php?id=" . $id);
    exit;
  }
