<?php

    /*
    |   É um pouco mais seguro que o while.
    |   Definimos a variavel auxiliar, condição e final do loop modificamos a variavel auxiliar
    */

    // Essa variavel do for só é usada dentro do loop
    // Por esse motivo podemos colocar variavel com apenas uma letra
    for( $n=0; $n < 10; $n++ ) {
        echo 'N: '.$n.'<br>';
    }