<?php

  // Exemplo de classe "deus" (não está de acordo com o S de solid por definir o modelo e alterar o banco de dados na mesma classe)

  class Usuario {

    public function setNome() {}
    public function getNome() {}

    public function add() {}
    public function update() {}
    public function delete() {}

  }

  // Forma correta de se criar classes para controlar o usuário

  class Usuario2 {

    public function setNome() {}
    public function getNome() {}

  }

  class UsuarioDb {
  
    public function add(Usuario2 $u) {}
    public function update(Usuario2 $u) {}
    public function delete($id) {}

  }