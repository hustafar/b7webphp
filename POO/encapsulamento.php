<?php
class Post {
  public int $id= 0;
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function aumentarLike() {
    $this->likes++;
  }

  public function setAuthor($author) {
    if ( strlen($author) >= 3 ) {
      $this->author = ucfirst($author);
    }
  }

  public function getAuthor() {
    return $this->author ?? 'Visitante';
  }
}

$post1 = new Post();
$post1->setAuthor('rodrigo');

$post2 = new Post();
$post2->setAuthor('fernando');

echo "POST 1: " . $post1->likes . " likes - " . $post1->getAuthor() . "<br>";
echo "POST 2: " . $post2->likes . " likes - " . $post2->getAuthor() . "<br>";