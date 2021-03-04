<?php

    // Inicio comum porque é usando sessao para salvar dados
    session_start();

    /*
    |   Desafio, se tiver setado o nome acessar o index se não vai para login
    |   Ter opção de deslogar..
    */

    // Se tiver nome na sessao e se ele não for fazio
    if ( isset( $_SESSION['nome'] ) && !empty( $_SESSION['nome'] ) ) {
        // Variavel nome recebe valor
        $nome = $_SESSION['nome'];
    } else {
        // Redirecionar se não tem nome
        header('Location: login.php');
        exit;
    }

?>
<!-- Exibe o valor da variavel nome -->
<?=$nome?> - <a href="sair.php">Sair</a>