<!DOCTYPE html>
<head>
    <title> ADICIONAR - GRUD com o DAO</title>
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
        form {
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
    <a href="index.php">< VOLTAR </a>
    </br>
    <form action="ativos/adicionar.php" method="post">
        <label> Nome: <br>
            <input type="text" name="name"> <br> <br>
        </label>
        <label> Email: <br>
            <input type="email" name="email"> <br> <br>
        </label>
        <label>
            <input type="submit" value="Adicionar">
        </label>
    </form>
</body>
</html>