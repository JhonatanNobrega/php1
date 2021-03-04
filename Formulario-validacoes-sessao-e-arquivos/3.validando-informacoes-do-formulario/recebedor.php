<?php

    /*
    |   Recebendo dados da requisição, pelo method GET
    |   \_ essa função pega os valores e valida se esta preenchido
    */

    // Pegando apenas valor com validação simples passando apenas os 2 primeiros parametros
    // Campos que não precisa de muitas validações é bom dar pelo menos esse limpada. 
    //  \_ Porque o usuario pode enviar tag html ou códigos javascript que vai ser rodado ao ser executado.
    $nome = filter_input( INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS );

    // Pegando valor com validaçao de email TEM QUE SER UM EMAIL
    $email = filter_input( INPUT_POST, 'email', FILTER_VALIDATE_EMAIL ); // @hotmail.com

    // Pegando valor com limpeza de valores indesejados. PODE MANDAR STRING, MAS PEGO APENAS INTEIRO
    // \_ Exemplo, foi colocado no campo '27 anos', mas só peguei o 27.
    // \_ Se for para ter que enviar apenas numero deve usar o validate
    $idade = filter_input( INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT ); // 27

    /*
    |   Assim como o filtro para input temos o filtro para variaveis. Valores que ja temos.
    |   Exemplo:  $sobrenome = 'Jhonatan'; filter_var( $sobrenome );
    */

    // Vefificamos se foi enviado 'nome'
    if( $nome ) {
        echo 'NOME: '.$nome.'<br><br>';
        echo 'EMAIL: '.$email.'<br><br>';
        echo 'IDADE: '.$idade;
    } else {
        // Não enviou o nome

        // Redirecionar para index
        // \_ O uso do header só pode ser feito caso não seja mostrado nada na tela
        header('Location: index.php');
        
        // Como proteção damos o exit para parar a execução, visto que exite formas de burla o redirecionamento
        exit;
    }