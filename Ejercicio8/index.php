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
            <input type="submit" name="enviar" value="ENVIAR" />
            <input type="reset" name="cancelar" value="CANCELAR" />
        </form>
        <?php

            if (isset($_POST['enviar'])){
                if (!empty($_POST['nombre'])) {
                    //implode(): Une elementos de un array en un string
                    //array_filter(): Filtra elementos de un array usando una función callback
                    //explode(): Divide un string en varios strings
                    $sql = "SELECT * FROM alumno WHERE Nombre LIKE '%" . implode(' ', array_filter(explode(' ', $_POST['nombre']))) . "%';";
                    $resultado = mysqli_query($conexion, $sql);
                    if (mysqli_num_rows($resultado)>0) {
                        while ($fila = mysqli_fetch_assoc($resultado)) {
                            echo $fila['NumAlumno'] . ': ';
                            echo $fila['Nombre'] . ' | ';
                            if ($fila['Repite'] == 0)
                                echo 'El alumno NO repite.';
                            else echo 'El alumno repite';
                            echo '<br />';
                        }
                    }else echo 'No se han encontrado resultados';
                }else echo 'El campo está vacío.';
            }
            mysqli_close($conexion);

        ?>
    </body>
</html>