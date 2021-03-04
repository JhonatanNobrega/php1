<?php

    /*
    |   O uso de parametros serve para tornar a função dinamica.
    |   Podemos passar valores para a função fazer de acordo com a informação que mandamos
    */

    // Define a função dizendo que vai receber 2 parametros
    function somar( $n1, $n2 ) {
        $total = $n1 + $n2;
        return $total;
    }

    // Uso da função 'somar' passando como parametros '10', '5'
    $soma = somar(10, 5);

    // Exibindo na tela o valor
    echo $soma;

    /*
    |   Atente que tudo que criamos dentro da função fica dentro
    |   A menos que demos retorno como o exemplo acima
    |   Nesse caso o que retornamos podemos guardar em uma variavel
    */