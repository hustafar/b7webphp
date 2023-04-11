<?php 
  // class Basico1 {
  //   public function somar( $x, $y ) {
  //     return $x + $y;
  //   }
  // }

  // class Basico2 {
  //   public function somar( $x, $y ) {
  //     $res = $x;
  //     for( $q = 0; $q < $y; $q++ ) {
  //       $res++;
  //     }
  //     return $res;
  //   }
  // }

  // class Matematica {
  //   private $basico;

  //   public function __construct($b) {
  //     $this->basico = $b;
  //   }

  //   public function somar( $x, $y ){
  //     return $this->basico->somar( $x, $y );
  //   }
  // }

  // $basico = new Basico1();
  // $mat = new Matematica($basico);
  // echo $mat->somar( 10, 15 );

  // // // // // 

  

  interface DatabaseInterface {
  }

  class Database {
    private $engine;

    public function __construct( $eng ) {
      $this->engine = $eng;
    }

    public function listarTudo() {
      return $this->engine->listar();
    }
  }

  class MySqlEngine implements DatabaseInterface {
    public function listar() {
      // ...
    }
  }

  class OracleEngine implements DatabaseInterface {
    public function listar() {
      // ...
    }
  }

  class MongoEngine implements DatabaseInterface {
    public function listar() {
      // ...
    }
  }

  $db = new Database( new MySqlEngine );

  $db->listarTudo();