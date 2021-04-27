<?php 

    // Conexão base do mysqli
    require '../config.php';

    $id = 1; // INT

    // Linha de comando para inserir no banco
    $sql = 'DELETE FROM user WHERE id = ?';
    // Informando o mysqli que faremos primeiro a preparaçao dos dados
    $sql = mysqli_prepare($link, $sql);
    // Passa os dados preparados
    $sql->bind_param('i', $id);
    // Manda executar para inserir no banco
    $sql->execute();
    
    // Fazemos o fechamento apenas quando não fomos mais realizar nenhuma conexao
    mysqli_close($link);