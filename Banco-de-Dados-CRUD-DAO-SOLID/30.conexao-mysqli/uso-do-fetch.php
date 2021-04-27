<?php 

    require 'config.php';

    $sql = 'SELECT * FROM user';
    $sql = mysqli_query($link, $sql);

    // Verifica se achou algum resultado
    if ($sql->num_rows > 0) {
        
        // Usado quando é apenas 1 item
        $data = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        
        // Usado para valores > 1 tipo 2+
        //$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
        
        echo '<pre>';
        print_r($data);

    }
    
    // Fazemos o fechamento apenas quando não fomos mais realizar nenhuma conexao
    mysqli_close($link);