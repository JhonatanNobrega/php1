<?php

    /*
    |   SÓ FUNCIONA NO PHP 7.4+
    |   Basicamente é uma função de uma linha
    |   As flechas idica que não precisa dar retorno porque ela mesmo se encarrega disso.
    */

    $nomeCompleto = fn($nome, $sobrenome) => $nome.' '.$sobrenome;

    echo $nomeCompleto('Jhonatan', 'Nobrega'); // Jhonatan Nobrega