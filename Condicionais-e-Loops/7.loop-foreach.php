<?php

    /*
    |   Loop exclusivo para trabalhar com array
    |   FOREACH = for each = 'Para cada'
    */

    $ingredientes = [
        'açucar',
        'farinha de trigo',
        'ovo',
        'leite',
        'fermento em pó'
    ];

    // Pega apenas os valores sem a chave
    foreach($ingredientes as $i){
        echo 'Item: '.$i.'<br>';
    }

    echo '<br><br><hr>';

    // Pega tanto o valor como a chave
    foreach($ingredientes as $chave => $i) {
        echo 'Item: '.($chave + 1).' - '.$i.'<br>';
    }