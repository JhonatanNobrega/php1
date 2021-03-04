<?php

    session_start();

    $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );
    $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
    $idade = filter_input( INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT );

    if( $nome ) {
        
        /*  
        |   Assim como o header para setar cookie não pode ter exibido nada na tela
        |
        */

        /* Parametros
            \_1° 'nomeDoCookie'
            \_2° $nome (valor que sera salvo nesse cookie)
            \_3° Quando esse cookie expira
        */

        // Defidindo valor da variavel expiraçao para registrar o cookie
        $expiracao = time() + (86400 * 30);

        // Setando o cookie no navegador
        setcookie('nome', $nome, $expiracao);

        echo 'NOME: '.$nome.'<br><br>';
        echo 'EMAIL: '.$email.'<br><br>';
        echo 'IDADE: '.$idade;
    } else {

        $_SESSION['aviso'] = 'Preencha os itens corretamente!';
        header('Location: index.php');
        exit;
    }