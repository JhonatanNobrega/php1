<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução à HTTP Requests</title>
</head>
<body>
<div>
    <h1>Cabeçalho</h1> - 
    <h2>
        <?php
            // Exibindo o valor do cookie se estiver setado
            if( isset($_COOKIE['nome']) ) {
                echo '<h2>'.$_COOKIE['nome'].'</h2>';
            }
        ?>
    </h2>
</div>
<hr>

