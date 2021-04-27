<?php 

    // Conexão base do mysqli
    require '../config.php';

    // Dados para inserir no banco da dados
    $user = 'Italo'; // STRING
    $pass = '123321'; // STRING
    $email = 'italojwtj@gmail.com'; // STRING
    $price = 1.5; // FLOAT
    $idade = 27; // INT

    // Linha de comando para inserir no banco
    $sql = 'INSERT INTO user (user, pass, email, price, idade) VALUES (?, ?, ?, ?, ?)';
    // Informando o mysqli que faremos primeiro a preparaçao dos dados
    $sql = mysqli_prepare($link, $sql);
    // Passa os dados preparados
    $sql->bind_param('sssdi', $user, $pass, $email, $price, $idade);
    // Manda executar para inserir no banco
    $sql->execute();

    // Pega o ultimo id inserido
    $ultimo_id = mysqli_insert_id($link);
    // Exibindo ultimo ID
    echo $ultimo_id;
    
    // Fazemos o fechamento apenas quando não fomos mais realizar nenhuma conexao
    mysqli_close($link);