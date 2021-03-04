<?php
    // Inicio comum porque é usando sessao para salvar dados
    session_start();

    // Se já tiver nome então vou mandar para index
    if( isset($_SESSION['nome']) && !empty($_SESSION['nome']) ) {
        
        // Redirecionamento para index
        header('Location: index.php');
        exit;
    }

?>

<form action="actionLogin.php" method="post">
    <h1>Login!</h1>
    <input type="text" name="name" placeholder="Digite seu nome"> 
    <br> <br>
    <input type="submit" value="Entrar">
</form>