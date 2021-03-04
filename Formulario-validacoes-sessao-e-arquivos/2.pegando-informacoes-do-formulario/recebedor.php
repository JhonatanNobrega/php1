<?php

    /*
    |   Recebendo dados da requisição, pelo method GET
    |   \_ essa função pega os valores e valida se esta preenchido
    */
    $nome = filter_input( INPUT_GET, 'nome' );

    // Vefificamos se foi enviado 'nome'
    if( $nome ) {
        echo 'NOME: '.$nome;
    } else {
        // Não enviou o nome

        // Redirecionar para index
        // \_ O uso do header só pode ser feito caso não seja mostrado nada na tela
        header('Location: index.php');
        
        // Como proteção damos o exit para parar a execução, visto que exite formas de burla o redirecionamento
        exit;
    }