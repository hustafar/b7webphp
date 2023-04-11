<?php
class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;
}

$post1 = new Post();
$post1->likes = 3;
$post1->comments = ['rodrigo'];

$post2 = new Post();

echo "POST 1: " . $post1->likes . "<br>";
echo "POST 2: " . $post2->likes . "<br>";