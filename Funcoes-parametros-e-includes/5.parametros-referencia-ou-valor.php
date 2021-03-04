<?php

    /*
    |   Podemos passar a variavel para dentro da função para modificar ela lá dentro
    */

    // Colocamos o '&' na parametro que iremos inserir dentro da função.
    function somar($n1, $n2, &$total) {
        
        // Aqui mudamos o valor da variavel $total e isso surte efeito fora da função.
        $total = $n1 + $n2 + $total;
    }

    $x = 3;
    $y = 2;
    $total = 1;
    
    somar($x, $y, $total);

    echo "TOTAL: $total"; // 6