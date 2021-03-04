<?php

    // Renomear um arquivo
    // \_ parametros (Local do arquivo, Novo nome do arquivo);
    //rename('teste.txt', 'teste2.txt');

    // Mover para outro local
    //rename('teste2.txt', 'pasta/teste2.txt');

    // Fazendo cópia do arquivo dentro da pasta para a raiz desse arquivo index
    copy('pasta/teste2.txt', 'teste.txt');