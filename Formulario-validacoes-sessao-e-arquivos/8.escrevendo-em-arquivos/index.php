<?php

    // Valor que será adiconado no arquivo txt
    $texto = 'Jhonatan Nobrega';

    // Se o arquivo não exitir ele vai criar, se ele exitir vai substituir
    file_put_contents('nome.txt', $texto);

    echo 'Arquivo criado com sucesso';

    /*
    |   Observação, no linux e mac geralmente é preciso dar permisão para essa ação de criar arquivo
    |   No windows geralmente não precisa.
    */
    
    // Ler txt e pegar seu conteudo
    $texto2 = file_get_contents('texto.txt');

    // Adicionando nova linha com valor 'Jhonatan Nobrega'
    $texto2 .= "\nJhonatan Nobrega";

    // Sobrescrevendo o arquivo texto.txt com valor novo
    file_put_contents('texto.txt', $texto2);