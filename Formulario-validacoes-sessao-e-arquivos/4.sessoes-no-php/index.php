<?php
/* 
|   Todas as paginas que vai usar sessão tem que iniciar com essa informação
|       \_ Se não tiver sessão criada ele cria
|
|   Funcionamento da sessão se da no servidor. No servidor ele guarda informações que ira identificar cada pessoa.
|   Semelhante ao cookies, mas o cookies fica no computador da pessoa.
*/
session_start();

// Recebe o arquivo contendo o cabeçario do HTML
require('header.php');

// Se tiver aviso na sessão mostra o aviso
if( $_SESSION['aviso'] ){

    // Mostrando aviso
    echo $_SESSION['aviso'];

    // Como esse aviso só é mostrado 1 vez, definimos como '' vazio;
    $_SESSION['aviso'] = '';
}

?>


<form method="POST" action="recebedor.php">

    <label>
        Nome: <br>
        <input type="text" name="nome">
    </label>
    <br> <br>

    <label>
        Email: <br>
        <input type="text" name="email">
    </label>
    <br> <br>

    <label>
        Idade: <br>
        <input type="text" name="idade">
    </label>
    <br> <br>

    <input type="submit" value="Enviar">

</form>


</body>
</html>