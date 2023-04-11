<?php

interface Database {

  public function listarProdutos();

  public function adicionarProduto();

  public function alterarProduto();
}

class MysqlDB implements Database {

  public function listarProdutos() {

  }

  public function adicionarProduto() {
    echo "Adicionando com Mysql... <br>";
  }

  public function alterarProduto() {

  }
}

class OracleDB implements Database {

  public function listarProdutos() {

  }

  public function adicionarProduto() {
    echo "Adicionando com Oracle... <br>";
  }

  public function alterarProduto() {

  }

}

class MongoDB implements Database {
  public function listarProdutos() {

  }

  public function adicionarProduto() {
    echo "Adicionando com MongoDB... <br>";
  }

  public function alterarProduto() {
    
  }
}

$db = new MysqlDB();
$db->adicionarProduto();

$db2 = new OracleDB();
$db2->adicionarProduto();

$db3 = new MongoDB();
$db3->adicionarProduto();