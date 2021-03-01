<?php

    /*
    |   Muito parecido com o if de uma linha
    |   SÓ FUNCIONA NO PHP 7.4+
    */

    //$nome = 'Jhonatan';
    //$sobrenome = 'Nobrega';

    // Se nome exitir ok, se não é 'Visitante'
    $nomeCompleto = $nome ?? 'Visitante';

    // O valor é concatenado, se existir. Se não fica vazio
    $nomeCompleto .= $sobrenome ?? '';

    echo $nomeCompleto;