<?php

// Recebe o arquivo contendo o cabeçario do HTML
require('header.php');

?>

<!-- 
    Formulário simples para simular requisições
    Method é a forma de envio
        |_ POST envia internamente (Ideal para informação que não pode ser mostrada na url. Exemplo: senha)
        |_ GET envia direto na url todos os dados. 
            |_ É como acessar um site com exemplo: site.com/index.php?nome=Jhonatan&idade=27
    Action é o arquivo que vai receber os dados e tratalos como quiser.
        |_ não definir action que dizer que vai enviar para o mesmo arquivo.
-->
<form method="POST" action="recebedor.php">

    <label>
        Nome: <br>
        <input type="text" name="nome">
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