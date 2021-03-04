<?php

    session_start();

    $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );
    $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
    $idade = filter_input( INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT );

    if( $nome ) {
        echo 'NOME: '.$nome.'<br><br>';
        echo 'EMAIL: '.$email.'<br><br>';
        echo 'IDADE: '.$idade;
    } else {

        // Definindo mensagem de erro na sessao
        $_SESSION['aviso'] = 'Preencha os itens corretamente!';

        header('Location: index.php');
        exit;
    }