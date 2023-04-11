<?php
class Post {
  private int $id;
  private int $likes = 0;

  protected function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  protected function setLikes($likes) {
    $this->likes = $likes;
  }

  public function getLikes() {
    return $this->likes;
  }

}

class Foto extends Post {
  private $url;

  public function __construct($id) {
    $this->setId($id);
    $this->setLikes(77);
  }

  public function setUrl($url) {
    $this->url = $url;
  }

  public function getUrl() {
    return $this->url;
  }

}

class Texto extends Post {
  private $body;

  // ...
}

$foto = new Foto( 20 );
$foto->setUrl('https://...');

echo 'Foto: #' . $foto->getId() . ' - ' . $foto->getLikes() . ' likes - ' . $foto->getUrl() . '<br>';
