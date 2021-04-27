<?php

    require '../config.php';
    require '../models/Usuario.php';
    require '../dao/UsuarioDaoMysql.php';

    $nome = filter_input( INPUT_POST, 'nome' );
    $email = filter_input( INPUT_POST, 'email' );

    if( $nome && $email ){

        // Criação do objeto
        $u = new Usuario();
        $u->setNome( $nome );
        $u->setEmail( $email );

        // Mandando para salvar
        $uDao = new UsuarioDaoMysql( $link );
        $uDao->adicionar( $u );

        header('Location: ../index.php');
    }

    header('Location: ../adicionar.php');