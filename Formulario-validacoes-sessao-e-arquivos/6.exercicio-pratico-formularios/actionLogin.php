<?php
    // Inicio comum porque é usando sessao para salvar dados
    session_start();

    // Pego o valor do input e dou uma limpeza para evitar receber código malicioso
    $nome = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS );

    // Se tiver recebido nome
    if ( $nome ) {
        // Definindo nome na sessao
        $_SESSION['nome'] = $nome;
    }

    // Idependente de ter enviado posso mandar para index porque lá ele vai mandar para login
    header('Location: index.php');
    exit;