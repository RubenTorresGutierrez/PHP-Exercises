<?php

    $conexion = new mysqli('localhost', 'root', '', 'bd_procedimiento');

?>
<!DOCTYPE>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="author" content="Rubén Torres" />
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label for="nombre">Buscar Nombre de alumno:</label>
            <input type="text" name="nombre" id="nombre" />
            <input type="submit" value="ENVIAR" />
            <input type="reset" value="CANCELAR" />
        </form>
        <?php


        ?>
    </body>
</html>