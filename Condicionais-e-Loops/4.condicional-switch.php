<?php

    $tipo = 'video';

    /*
    |   O funcionamento se da seguinte forma quando se acha o valor da variavel no loop ele não procura mais. 
    |   Por isso usamos o breack
    */

    switch($tipo){
        // Caso a variavel $tipo tiver o valor 'foto' entra aqui e executa o código
        case 'foto':
            echo 'É foto';
            break;

        case 'video':
            echo 'É video';
            break;
            
        case 'text':
            echo 'É texto';
            break;
    }