<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio Arrays 1</title>
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
    </head>
    <body>
        <h1>MESES</h1>
        <table>
            <?php

                //Variables            
                $mes=array(
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
                    12 => "Diciembre",
                );

                echo '<tr>'.
                    '<td></td>';
                    for($i=1;$i<=12;$i++)
                        echo '<td>'.$i.'</td>';
                echo '<tr>'.
                    '<th>WHILE</th>';
                    $i=1;
                    while($i<=12){
                        echo '<td>'.$mes[$i].'</td>';
                        $i++;
                    }
                echo '<tr>'.
                    '<th>FOR</th>';
                    for($i=1;$i<=12;$i++)
                        echo '<td>'.$mes[$i].'</td>';
                echo '</tr>'.
                '<tr>'.
                    '<th>FOREACH</th>';
                    foreach($mes as $valor)
                        echo '<td>'.$valor.'</td>';
                echo '</tr>';

            ?>
        </table>
        <?php

            echo '<h1>PRINT_R</h1>'
            .'<div>';
                print_r($mes);
            echo '</div>';

        ?>
    </body>
</html>