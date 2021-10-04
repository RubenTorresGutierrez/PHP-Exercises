<?php

    header(Location: localhost/DAW/2/DWES/PHP-Exercises/Ejercicio7/index.html);

    $conexion = new mysqli('localhost', 'root', '', 'bd_procedimiento');
    if (!empty($_POST['numalu'])) {
        $sql = 'SELECT * FROM alumno WHERE NumAlumno = ' . $_POST['numalu'] . ';';
        $resultado = mysqli_query($conexion, $sql);
        if (!$resultado || mysqli_num_rows($resultado) == 0)
            echo 'No se ha encontrado el número de alumno ' . $_POST['numalu'] . '.';
        else{
            $fila = mysqli_fetch_assoc($resultado);

            echo $fila['Nombre'] . ' | ';
            if ($fila['Repite'] == 0)
                echo 'El alumno NO repite.';
            else echo 'El alumno repite.';
        }
    }else echo 'No se han introducido datos.';
    mysqli_close($conexion);
?>
