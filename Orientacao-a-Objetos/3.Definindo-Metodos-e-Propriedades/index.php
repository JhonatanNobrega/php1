<?php

// Isso é a classe
class Post {
    // Propriedade privada só pode ser usada internamente
    private $likes = 0;
    public $comments = [];
    public $author;

    // Método publico
    public function aumentarLink(){
        // Isto! Ou seja o que esta aqui dentro da class
        $this->likes++;
    }

    public function pegarLink() {
        return $this->likes;
    }
}

// Isso é o objeto

// Criando o objeto
$post1 = new Post();
// Setando valor para likes
$post1->aumentarLink();

$post2 = new Post();
$post2->aumentarLink();

// Mostrando na tela
echo 'POST 1: '.$post1->pegarLink().'<br>';
echo 'POST 2: '.$post2->pegarLink().'<br>';