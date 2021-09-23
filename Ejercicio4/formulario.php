<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario</title>
    </head>
    <body>
        <?php
            //Variables
            $correo = $_GET['correo'];
            $usuario = $_GET['usuario'];
            $pw = $_GET['pw'];
            $genero = $_GET['genero'];
            $intereses = $_GET['intereses'];
            $conocer = $_GET['conocer'];
            $comentarios = $_GET['comentarios'];

            echo $correo.'<br/>';
            echo $usuario.'<br/>';
            echo $pw.'<br/>';
            echo $genero.'<br/>';
            echo $intereses.'<br/>';
            echo $conocer.'<br/>';
            echo $comentarios.'<br/>';
        ?>
    </body>
</html>