<?php

    //Incluir
    require_once 'estructurahtml.php';

    //Funciones
    function mostrarArray(){

        //Variables
        $conocer = rellenarArray();

        for($i=0;$i<sizeof($conocer);$i++)
            echo '<option value="'.$i.'">'.$conocer[$i].'</option>';

    }

    function rellenarArray(){

        return array(
            'Por internet',
            'En la televisión',
            'Por amigos',
            'Otros'
        );

    }

?>
<?php

    //Variables
    $idioma = 'es';
    $titulo = 'Forumulario Prueba';

    cabecera($idioma, $titulo);

?>
    <body>
        <main>
            <form action="formulario.php" method="POST">
                <!-- eMail -->
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" value=""/><br/>
                <!-- Intereses input:checkbox -->
                <label for="intereses">Intereses:</label><br/>                
                <input type="checkbox" name="intereses[]" id="cine" value="cine"/>
                <label for="cine">Cine</label><br/>
                <input type="checkbox" name="intereses[]" id="musica" value="musica"/>
                <label for="musica">Música</label><br/>
                <input type="checkbox" name="intereses[]" id="libros" value="libros"/>
                <label for="libros">Libros</label><br/>
                <!-- Cómo nos conociste select -->
                <label for="conocer">¿Cómo nos conociste?</label>
                <select name="conocer" id="conocer">
                    <option value="" hidden>-- Seleccionar --</option>
                    <?php

                        mostrarArray();

                    ?>
                </select><br/>
                <!-- Botones -->
                <input type="submit" name="enviar" value="ENVIAR" />
                <input type="reset" name="borrar" value="BORRAR" />
            </form>
        </main>
    </body>
</html>