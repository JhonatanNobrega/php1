<?php

    echo '<pre>';
    print_r( $_FILES['arquivo'] );

    /*
        Array
            (
                [name] => 2021-02-26_07h47_51.jpg
                [type] => image/jpeg
                [tmp_name] => C:\xampp\tmp\phpF976.tmp
                [error] => 0
                [size] => 68109
            )
    */

    // Tipos de arquivos permitidos
    $tiposAceitos = ['image/jpeg', 'image/jpg', 'image/png'];

    // Verifica se esta no array o tipo permitido
    if( in_array( $_FILES['arquivo']['type'], $tiposAceitos) ) {

        // Gera um nome aleatório para o arquivo
        $nomeArquivo = md5( time().rand(0, 1000) ).'.jpg';

        // Salva o arquivo no local desejado
        move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nomeArquivo);
         
    } else {
        echo 'Arquivo não permitido';
    }