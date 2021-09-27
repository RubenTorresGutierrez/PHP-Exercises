<?php

    //Incluir
    require_once 'estructurahtml.php';

?>
<?php

    //Variables
    $idioma = 'es';
    $titulo = 'Forumulario Prueba';

    cabecera($idioma, $titulo);

?>
    <body>
        <h1>DATOS RECIBIDOS:</h1>
        <?php

            echo 'Con print_r';
            if(isset($_POST))
                print_r($_POST);
            echo '<br/>';

            if(!empty($_POST['correo']))
                echo 'El correo es '.$_POST['correo'].'<br/>';
            if(!empty($_POST['usuario']))
                echo 'El usuario es '.$_POST['usuario'].'<br/>';
            if(!empty($_POST['pw']))
                echo 'La contraseña es '.$_POST['pw'].'<br/>';
            if(isset($_POST['genero']))
                echo 'El género es '.$_POST['genero'].'<br/>';
            if(isset($_POST['intereses'])){
                echo 'Los intereses son';
                foreach($_POST['intereses'] as $intereses)
                    echo ', '.$intereses;
                echo '<br/>';
            }
            if(!empty($_POST['conocer']))
                echo 'Nos conoció a través de '.$_POST['conocer'].'<br/>';
            if(!empty($_POST['comentarios']))
                echo 'Mensaje: '.$_POST['comentarios'].'<br/>';

        ?>
    </body>
</html>