<?php

  // // Forma errada pois o metodo construtor do UsuarioDAO quebra caso o banco seja alterado

  // class MySQLConnection {
  //   public function connect() {}
  // }

  // class OracleConnection {
  //   public function connect() {}
  // }

  // class UsuarioDAO {
  //   private $db;

  //   public function __construct(OracleConnection $dbCon) {
  //     $this->db = $dbCon;
  //   }
  // }

  // $dbCon = new OracleConnection('...');
  // $usuarioDao = new UsuarioDAO( $dbCon );
  // $usuario2Dao = new UsuarioDAO( $dbCon );

  // Usando interface para a conexão do banco de dados fica correto

  interface DBConnection {
    public function connect();
  }

  class MySQLConnection implements DBConnection {
    public function connect() {}
  }

  class OracleConnection implements DBConnection {
    public function connect() {}
  }

  class UsuarioDAO {
    private $db;

    public function __construct(DBConnection $dbCon) {
      $this->db = $dbCon;
    }
  }

  $dbCon = new OracleConnection('...');
  $usuarioDao = new UsuarioDAO( $dbCon );
  $usuario2Dao = new UsuarioDAO( $dbCon );