<?php

    /*
    |   O local correto para se colocar parametros com valor padrão é o ultimo valor
    |       |_ isso porque os parametros são capiturados na sequencia que recebe e que se passa
    */

    /* 
    |   Aqui na função somar $n3 esta com valor padrão, por isso colocamos 0.
    |       |_ nesse caso é opcional o envio dele para uso da função
    */
    function somar( $n1, $n2, $n3 = 0 ) {
        $total = $n1 + $n2 + $n3;
        return $total;
    }

    // Não irei enviar o 3 parametro porque é opcional
    $soma = somar(2, 5);

    // Exibindo na tela o valor
    echo $soma.'<br><br>';


    /*
    |   Fazendo uso de type (tipo) de valor que a função vai aceitar
    */
    // Essa função recebe apenas string em $nome e $sobrenome e apenas inteiro em $idade
    function frase (string $nome, string $sobrenome, int $idade) {
        return "$nome $sobrenome tem $idade anos";
    }
    
    // Exibindo na tela o valor
    echo frase('Jhonatan', 'Nobrega', 27).'<br><br>';

    // Criação de array para uso posterior
    $dados = [
        'nome' => 'Jhonatan',
        'sobrenome' => 'Nobrega',
        'idade' => 27
    ];

    // Essa função recebe apenas array como parametro
    function frase2 (array $dados) {
        foreach( $dados as $chave => $valor ){
            echo "$chave : $valor <br>";
        }
    }

    // No seu uso não usamos 'echo' nem amazenamos porque tem um 'echo' dentro da função
    frase2($dados);