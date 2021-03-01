<?php

    /*
    |   WHILE pode ser perigoso, caso esqueça de mudar o valor da condição.
    |   Ao criar o código, tem que saber como parar ele. Para não entrar no loop infinito.
    */

    $numero = 0;

    // Enquanto essa condição é satisfeita é executado esse código
    while( $numero < 5 ) {
        echo 'N: '.$numero.'<br>';
        $numero++;
    }

    /* Resultado
        N: 0
        N: 1
        N: 2
        N: 3
        N: 4
    */