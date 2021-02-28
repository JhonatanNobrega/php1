<?php

    /*
    |   O array nada mais é que uma variavel que contem multiplos valores
    */

    $ingredientes = [
        'açucar', 
        'farinha de trigo', 
        'ovo', 
        'leite', 
        'fermento em pó'
    ];

    /*
    |   Exemplo abaixo é exatamente o mesmo do array acima. Só que nesse caso espeficiamos 'key'.
    |   Quando não definimos 'key' é definido automaticamente.
    */
    $ingredientes = [
        0 => 'açucar', 
        1 => 'farinha de trigo', 
        2 => 'ovo', 
        3 => 'leite', 
        4 => 'fermento em pó'
    ];

    // Pegando um valor do array. Observe que o primeiro valor é 0. Por isso o valor 3 é o 2.
    $ingrediente1 = $ingredientes[0]; // açucar
    $ingrediente3 = $ingredientes[2]; // ovo

    /*
    |   Quando usamos uma chave personalizada então não podemos mais usar a sequencia numérica conforme o exemplo acima
    */
    $nomeCompleto = [
        'nome' => 'Jhonatan',
        'sobrenome' => 'Nobrega'
    ];

    $nome = $nomeCompleto['nome']; // Jhonatan
    $sobrenome = $nomeCompleto['sobrenome']; // Nobrega