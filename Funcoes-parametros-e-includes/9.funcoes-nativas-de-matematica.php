<?php  

    /*
    |   EXISTE MUITAS FUNÇÕES MATEMÁTICAS, MAS ABAIXO SÃO AS QUE MAIS USAMOS EM SISTEMAS REAIS
    |
    |   DOCUMENTAÇÃO
    |       |_ https://www.php.net/manual/pt_BR/book.math.php
    */

    // Função que retorna o valor absoluto
    $numeroNegativo = -8.4;
    echo abs( $numeroNegativo ); // 8.4
    echo '<br><br>';

    // Valor de pi
    echo pi(); // 3.1415926535898
    echo '<br><br>';

    // Arredondar SEMPRE PRA BAIXO
    $numeroQualquer = 2.7594376384;
    echo floor($numeroQualquer); // 2
    echo '<br><br>';

    // Arredonda SEMPRE PRA CIMA
    echo ceil($numeroQualquer); // 3
    echo '<br><br>';

    // Arredonda DEPENDENDO DO PROPRIO NUMERO
    echo round( $numeroQualquer ); // 3
    echo '<br><br>';
    // Passando o segundo parametro arredonda apenas as casas decimais
    echo round( $numeroQualquer, 2 ); // 2.76
    echo '<br><br>';

    // Gera numero aleatório entre os 2 numeros passados como parametros
    echo rand(3, 9); // Pode ser 3, 4, 5, 6, 7, 8 ou 9
    echo '<br><br>';

    // Pega o MAIOR valor de um array
    $lista = [1, 9, 5, 12];
    echo max( $lista ); // 12
    echo '<br><br>';
    // Pega o MENOR valor de um array
    echo min( $lista ); // 1