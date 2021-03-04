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

    // Funciona desde que exita a pasta 'arquivos'. Isso porque não tem permissão de escrita
    $nomeArquivo = $_FILES['arquivo']['name'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nomeArquivo);