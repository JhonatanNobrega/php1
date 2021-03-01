<?php

    $idade = 27;

    /*  SE idade for maior ou igual a 18 ENTAO
            |_ mostrar na tela 'Maior de idade'
        CASO CONTRÁRIO
            |_ mostrar na tela 'Menor de idade'
    */

    if( $idade >= 18 ) {
        echo 'Maior de idade';
    } else {
        echo 'Menor de idade';
    }

    /*
    |   x < y   :X é menor que Y
    |   x > y   :X é maior que Y
    |   x == y  :X é ingual a Y
    |   x === y :X é identico a Y (Muito util quando trabalhamos com valor '0 inteiro' ou 'null')
    |   x >= y  :X é maior ou ingual a Y
    |   x <= y  :X é menor ou igual a Y
    |   x != y  :X é diferente de Y
    */