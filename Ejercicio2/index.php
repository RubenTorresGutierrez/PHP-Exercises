<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio Arrays 1</title>
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
    </head>
    <body>
        <h1>VISUALIZAR MES MEDIANTE UNA FUNCIÓN</h1>
        <?php
            
            echo 'El mes seleccionado es: '.visualizar_mes(4);

            //Functions
            function visualizar_mes($nmes){

                //Variables
                $meses = array(
                    1 => "Enero",
                    2 => "Febrero",
                    3 => "Marzo",
                    4 => "Abril",
                    5 => "Mayo",
                    6 => "Junio",
                    7 => "Julio",
                    8 => "Agosto",
                    9 => "Septiembre",
                    10 => "Octubre",
                    11 => "Noviembre",
                    12 => "Diciembre"
                );

                return $meses[$nmes];

            }

        ?>
    </body>
</html>