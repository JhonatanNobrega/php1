<?php 

    // Conexão base do mysqli
    require '../config.php';

    // Dados para inserir no banco da dados
    $id = 2;
    $user = 'Italo TESTE';
    $pass = '123321 TESTE';
    $email = 'italojwtj@gmail.com TESTE';


    // Linha de comando para inserir no banco
    $sql = "UPDATE user SET user = ?, pass = ?, email = ? WHERE id = ?";
    // Informando o mysqli que faremos primeiro a preparaçao dos dados
    $sql = mysqli_prepare($link, $sql);
    // Passa os dados preparados
    $sql->bind_param('sssi', $user, $pass, $email, $id);
    // Manda executar para inserir no banco
    $sql->execute();
    
    // Fazemos o fechamento apenas quando não fomos mais realizar nenhuma conexao
    mysqli_close($link);