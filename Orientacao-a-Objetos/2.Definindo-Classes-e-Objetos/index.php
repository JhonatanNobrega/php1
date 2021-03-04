<?php

// Isso é a classe
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

// Isso é o objeto

// Criando o objeto
$post1 = new Post();
// Setando valor para likes
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;

// Mostrando na tela
echo 'POST 1: '.$post1->likes.'<br>';
echo 'POST 2: '.$post2->likes.'<br>';