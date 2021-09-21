<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio Arrays 3</title>
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
    </head>
    <body>
        <h1>Días que tiene cada mes</h1>
        <?php

            $meses = array(
                1 => array("Enero" => 31),
                2 => array("Febrero" => array(28,29)),
                3 => array("Marzo" => 31),
                4 => array("Abril" => 30),
                5 => array("Mayo" => 31),
                6 => array("Junio" => 30),
                7 => array("Julio" => 31),
                8 => array("Agosto" => 31),
                9 => array("Septiembre" => 30),
                10 => array("Octubre" => 31),
                11 => array("Noviembre" => 30),
                12 => array("Diciembre" => 31)
            );

            echo '<table>';
                foreach($meses as $i => $mes){
                    echo '<tr>';
                    foreach($mes as $j => $dias){
                        if($i==2){
                            echo '</tr><td rowspan="2">'.$i.'</td><td rowspan="2">'.$j.'</td>';
                            echo '<td>'.$dias[0].'</td><tr><td>'.$dias[1].'</td></tr><tr>';
                        }else echo '<td>'.$i.'</td><td>'.$j.'</td><td>'.$dias.'</td>';
                    }
                    echo '</tr>';
                }
            echo '</table>';

        ?>
    </body>
</html>