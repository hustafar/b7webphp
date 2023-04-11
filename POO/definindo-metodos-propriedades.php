<?php
class Post {
  // public, private e protected
  private $likes = 0;
  private $comments = [];
  private $author;

  public function getLikes() {
    return $this->likes;
  }

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post();
$post1->aumentarLike();
$post2 = new Post();

echo "POST 1: " . $post1->getLikes() . "<br>";
echo "POST 2: " . $post2->getLikes() . "<br>";