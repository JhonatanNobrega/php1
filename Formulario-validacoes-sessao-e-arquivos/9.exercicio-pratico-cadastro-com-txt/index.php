<?php

    /*
    |   Desafio, criar uma lista em txt e exibir
    |   \_ ter opção para adicionar novos valores
    |   \_ não foi passado, mas vou tentar deletar valores (AINDA NÃO FEITO)
    */

    // Lendo nomes do arquivo txt
    $nomes = file_get_contents('nomes.txt');

    // Adicionado quebra de linha, e retornando um array para o foreach
    $nomes = explode("\n", $nomes);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista em TXT</title>
</head>
<body>
    <h3>Novo item</h3>
    <form action="recebedor.php" method="post">
        <input type="text" name="nome"> <input type="submit" value="Adiconar">
    </form> <br> <br>

    <h1>Lista dos nomes:</h1>
    <ul>
        <?php
            foreach( $nomes as $nome ) {
                
                echo '<li>'.$nome.' ';
                echo '-- <a href="recebedor.php?deletar='.$nome.'">[ DELETAR ]</a></li>';
            }
        ?>
    </ul>
</body>
</html>