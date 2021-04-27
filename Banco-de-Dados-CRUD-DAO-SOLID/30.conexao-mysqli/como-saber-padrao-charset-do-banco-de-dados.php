<?php 

    require 'config.php';

    // Pegando o valor padrão do banco da dados CHARSET.
    $charset = $link -> character_set_name();
    
    // Mostrando na tela a informação.
    echo "O conjunto de caracteres padrão alocado é : " . $charset; // utf8

    // Fecha conexao anterior ao banco.
    $link -> close();