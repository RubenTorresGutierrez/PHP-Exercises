<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulario</title>
    </head>
    <body>
        <h1>DATOS RECIBIDOS:</h1>
        <?php

            echo 'Con print_r';
            if(isset($_GET))
                print_r($_GET);
            echo '<br/>';

            if(!empty($_GET['correo']))
                echo 'El correo es '.$_GET['correo'].'<br/>';
            if(!empty($_GET['usuario']))
                echo 'El usuario es '.$_GET['usuario'].'<br/>';
            if(!empty($_GET['pw']))
                echo 'La contraseña es '.$_GET['pw'].'<br/>';
            if(isset($_GET['genero']))
                echo 'El género es '.$_GET['genero'].'<br/>';
            if(isset($_GET['intereses'])){
                echo 'Los intereses son';
                foreach($_GET['intereses'] as $intereses)
                    echo ', '.$intereses;
                echo '<br/>';
            }
            if(!empty($_GET['conocer']))
                echo 'Nos conoció a través de '.$_GET['conocer'].'<br/>';
            if(!empty($_GET['comentarios']))
                echo 'Mensaje: '.$_GET['comentarios'].'<br/>';

        ?>
    </body>
</html>