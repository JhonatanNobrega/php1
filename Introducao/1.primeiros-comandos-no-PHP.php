<?php 
    /*
    |   PASSO A PASSO AO ACESSAR UM SITE:
    |   1. Apache recebe a requisição
    |   2. Manda para o local correto
    |   3. Carrega o arquivo
    |   4. Se tiver código php chama o PHP pra interpretar o código PHP
    |   5. O PHP manda o resultado para o Apache
    |   6. O apache junta com o que não é interpretável e manda pro usuário
    */

    /*
    |   INFORMAÇÃO DE CRIAÇÃO DO CÓDIGO PHP:
    |   Todos os código php inicia com '<?php' e termina com '?>'
    |   Quando nosso documento só tem código PHP não precisa fazer o fechamento do PHP
    */
?>

<?php

    // Definindo variavel 'nome' com valor 'Jhonatan'
    $nome = 'Jhonatan';

    // Mostrar na tela o valor da variavel nome
    echo $nome;

    // Definindo variavel 'sobrenome' com valor 'Nobrega'
    $sobrenome = 'Nobrega';
?>

<!-- 
    Puladas de linhas 
-->
<br><br>

<!-- 
    Quando queremos apenas mostrar na tela algum valor da variavel podemos fazer assim sem o 'echo'
    Isso é código PHP.
-->
<?=$sobrenome?>