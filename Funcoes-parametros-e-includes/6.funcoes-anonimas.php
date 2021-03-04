<?php

    /*
    |   Nada mais é que uma função que não tem nome, podemos passar ela para outras variaveis e até com parametro
    */

    // Criação da função anonima sendo amazenada em uma variavel
    $lucro = function (float $valor) {
        
        // Retorna 10% de algum valor
        return $valor * 0.1;
    };

    // Uso da função que calcula 10% de qualquer valor
    echo $lucro(100.90).'<br><br>';

    // Trocando de variavel
    $calcularLucro = $lucro;

    // Função simples para fazer uma frase
    function frase ( $nomeCompleto, $calcularLucro ) {
        return "$nomeCompleto ganhou esse mês $calcularLucro";
    }

    // Uso da função 'frase' passando como parametro uma função anonima
    echo frase('Jhonatan Nobrega', $calcularLucro(1500.99));