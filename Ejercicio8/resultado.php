<?php

    $conexion = new mysqli('localhost', 'root', '', 'bd_procedimiento');
    if (!empty($_POST)) {
        $sql = 'SELECT * FROM alumno WHERE NumAlumno = ' . $_POST['numalu'] . ';';
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_assoc($resultado);

        echo $fila['Nombre'] . ' ';
        echo $fila['Repite'];
    }
?>
