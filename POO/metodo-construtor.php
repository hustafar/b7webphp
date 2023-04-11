<?php
class Post {
  public int $id= 0;
  public $likes = 0;
  public $comments = [];
  public $author;

  // public function __construct($likes = 0, $comments = [], $author = '') {
  //   $this->likes = $likes;
  //   $this->comments = $comments;
  //   $this->author = $author;
  // }

  public function __construct($postId) {
    $this->id = $postId;
    // consultar bd pra procurar post...
    $this->likes = $postId * 2;
  }

  public function aumentarLike() {
    echo 'abc';
    $this->likes++;
  }
}

$post1 = new Post( 1 );
 
$post2 = new Post( 2 );

echo "<br>POST 1: " . $post1->likes . "<br>";
echo "POST 2: " . $post2->likes . "<br>";