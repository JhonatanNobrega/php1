<?php

    /* TRABALHANDO COM RESULTADO STRING */

    $nome = 'Jhonatan';
    $sobrenome = 'Nobrega';
    $idade = 27;

    $nomeCompleto = $nome.$sobrenome; // JhonatanNobrega
    $nomeCompleto = $nome.' '.$sobrenome; // Jhonatan Nobrega
    $nomeCompleto = "$nome $sobrenome"; // Jhonatan Nobrega
    $frase = "$nome $sobrenome tem $idade anos"; // Jhonatan Nobrega tem 27 anos
    
    $nomeCompleto = $nome; // Jhonatan
    $nomeCompleto .= $sobrenome; // JhonatanNobrega


    /* TRABALHANDO COM RESULTADO NUMÉRICO */

    $x = 1;  $y = 4;
    $contatenado = $x.$y; // 14 'não é quatorze é 1 e 4 juntos'

    $x = '1'; $y = 4; 
    // |_ Observe que o valor de $x é uma string, no php ele consegue intepretar valor de string como numero
    $contatenado = $x+$y; // 5 'aqui foi somado 1 + 4'

    /* Uso abrevidado de concatenação junto com funções matematica */
    $x = 2; $y = 4;
    $x .= $y; // 24
    $x += $y; // 6
    $x *= $y; // 8
    $x -= $y; // -2