<?php

    
    $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );

    if( $nome ) {

        $nomes = file_get_contents( 'nomes.txt' );
        $nomes .= "\n".$nome;

        file_put_contents( 'nomes.txt', $nomes );
    }
    
    /*
    $nomeDeletar = filter_input( INPUT_GET, 'deletar', FILTER_SANITIZE_SPECIAL_CHARS );
    
    if( $nomeDeletar ){


        $nomes = file_get_contents( 'nomes.txt' );
        $nomes = explode("\n", $nomes);

        $posicaoDelete = array_search( $nomeDeletar, $nomes);

        echo $posicaoDelete;

        //unset( $nomes[0] );

        print_r( $nomes );
        exit;
    
    }
    */

    header('Location: index.php');