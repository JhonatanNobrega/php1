<?php 

    $host = 'localhost';
    $user = 'root';
    $pass = ''; 
    $bd = 'mysqli';

	$link = mysqli_connect( $host, $user, $pass, $bd );
	

	// Veficando conexao
	if (mysqli_connect_errno()) 
	{
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	// alterar o conjunto de caracteres para utf8
	$link->set_charset("utf8");