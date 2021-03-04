<?php 

    // Inicio comum porque é usando sessao para salvar dados
    session_start();

    // Defino a sessão como vazio
    $_SESSION['nome'] = '';

    // Redireciona para index, como vai esta vazio ele no index manda para login
    header('Location: index.php');
    exit;