<?php

// Para expirar o cookie basta setar com o mesmo nome o tempo no passado
setcookie('nome', '', time() - 3600);

// Redirecionar index
header('Location: index.php');
exit;