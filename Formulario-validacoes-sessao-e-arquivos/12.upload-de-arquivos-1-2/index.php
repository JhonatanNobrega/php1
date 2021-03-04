<?php 

    /*
    |   Quando se tem arquivos no formulario tem que colocar =>  enctype="multipart/form-data"
    |   
    */

?>


    <form action="recebedor.php" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" value="Enviar">
    </form>