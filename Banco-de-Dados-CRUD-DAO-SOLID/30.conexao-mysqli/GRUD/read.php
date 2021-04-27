<?php 

    // Conexão base do mysqli
    require '../config.php';


    // Linha de comando para inserir no banco
    $sql = 'SELECT * FROM user';
    
    // Como é uma consulta, podemos executar direto dessa forma com o msqli_query
    $sql = mysqli_query($link, $sql);
    
    // Vefica se deu resultado
    if( $sql->num_rows > 0 ) {

        // Organiza a consulta para ser usado como array
        $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);

        // Para cada item é feito um loop
        foreach ( $data as $item ) {
            
            echo 'ID: '.$item['id'].'<br>';
            echo 'USER: '.$item['user'].'<br>';
            echo 'PASS: '.$item['pass'].'<br>';
            echo 'EMAIL: '.$item['email'].'<br>';
            echo '<br><br>';
        }
    }

    // Fazemos o fechamento apenas quando não fomos mais realizar nenhuma conexao
    mysqli_close($link);