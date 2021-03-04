<?php

    // Ler o arquivo de texto. Pode ser até url com texto
    $texto = file_get_contents('texto.txt');

    // Adiciona quebra de linhas
    $texto = explode("\n", $texto);

    /*  Array -> print_r($texto);
            (
                [0] => Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit ante. Vestibulum enim felis, scelerisque ac nulla eu, fermentum iaculis mauris. Sed aliquet velit nisl, quis pellentesque magna pulvinar vel. In hac habitasse platea dictumst. Nam sit amet lorem mauris. Etiam placerat lectus ipsum, fringilla placerat justo placerat id. Vestibulum pretium aliquam est, non maximus dui interdum ultrices. Cras ullamcorper ultricies ex, eu ornare lorem elementum sit amet. Aliquam elementum euismod ante, ut blandit libero tincidunt sit amet.
                [1] => Ut sit amet tristique leo. Maecenas fermentum vestibulum elit, faucibus elementum nulla cursus ac. Mauris mauris enim, scelerisque nec commodo in, gravida non elit. Ut ultricies ligula aliquet purus molestie accumsan. Mauris quis aliquet ipsum, dignissim tempus turpis. Cras sed lorem ut est finibus vestibulum eu ut nibh. Cras porta enim a gravida aliquam. Nullam quam eros, convallis nec semper non, tempus vel nisi. Cras dictum fringilla ipsum sit amet hendrerit. Praesent pulvinar, risus nec ultricies semper, orci nulla tincidunt nibh, nec tristique elit felis at libero. Ut mattis mollis iaculis. Proin non venenatis ante. Suspendisse id ante vitae lacus tempus scelerisque.
                [2] => Sed imperdiet ornare risus sit amet cursus. Praesent a neque velit. Nulla feugiat nulla ac mauris maximus, ac porttitor est dignissim. Maecenas suscipit augue arcu. In vitae consectetur orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget dictum metus, eu laoreet tortor. Mauris quis gravida mi. Sed pulvinar, augue eu iaculis sollicitudin, velit velit laoreet sem, non ullamcorper lacus ligula in erat. Fusce felis quam, pretium at risus non, ultrices hendrerit tellus. Donec pulvinar diam vel magna vestibulum, vel auctor diam posuere. Nulla faucibus ex quam, in elementum ligula laoreet vitae. Duis ornare nec enim dignissim fermentum. Maecenas sollicitudin semper nunc, in ullamcorper nibh semper ut. Vestibulum rhoncus euismod porttitor. Integer lorem tellus, feugiat id sem a, bibendum hendrerit leo.
            )
    */

    /*
        echo "LIINHAS: ".count($texto); //LIINHAS: 3
    */
    