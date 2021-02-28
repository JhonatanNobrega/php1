<?php

    /*
    |   SÓ FUNCIONA NO PHP 7.4+
    |   Serve para não ter que duplicar valores, visto que o exemplo abaixo é identicos, só muda que o bolo2 tem 'corante'
    */

    $bolo1 = [
        'açucar', 
        'farinha de trigo', 
        'ovo', 
        'leite', 
        'fermento em pó'
    ];

    $bolo2 = [
        ...$bolo1,
        'corante'
    ];

    /*  $bolo2 = Array
            (
                [0] => açucar
                [1] => farinha de trigo
                [2] => ovo
                [3] => leite
                [4] => fermento em pó
                [5] => corante
            )
    */