<?php
  require 'config.php';
  require 'dao/UsuarioDAOMysql.php';

  $usuarioDao = new UsuarioDAOMysql($pdo);
  $lista = $usuarioDao->findAll();
?>

<a href="create.php">Adicionar usuário</a>

<hr />

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Ações</th>
  </tr>
  <?php foreach($lista as $usuario) : ?>
    <tr>
      <td><?=$usuario->getId();?></td>
      <td><?=$usuario->getNome();?></td>
      <td><?=$usuario->getEmail();?></td>
      <td>
        <a href="edit.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
        <a href="delete.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja Excluir?')">[ Excluir ]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>