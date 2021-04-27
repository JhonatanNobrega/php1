<?php


require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql( $link );

$lista = $usuarioDao->selecionar_todos();

?>

<!DOCTYPE html>
<head>
    <title>LER TODOS - GRUD com o DAO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
        }
        a{
            margin-left: 50px;
        }
        table {
            margin-top: 20px;
            margin: auto;
            padding: 20px;
            width: 80%;
            border: 1px solid #CCC;
        }
    </style>
</head>
<body>
    </br>
    <a href="adicionar.php">ADICIONAR USUARIO</a>
    </br>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>AÇÕES</td>
            </tr>
        </thead>
            <?php foreach( $lista as $item ): ?>
                <tr>
                <td><?=$item->getId()?></td>
                <td><?=$item->getNome()?></td>
                <td><?=$item->getEmail()?></td>
                <td>
                    <a href="editar.php?id=<?=$item->getId()?>">[ Editar ]</a>
                    <a href="excluir.php?id=<?=$item->getId()?>" onclick="return confirm('Tem certeza que deseja excluir?');" >[ Excluir ]</a>
                </td>
            </tr>
            <?php endforeach ?>
        <tbody>
        </tbody>
    </table>
</body>
</html>