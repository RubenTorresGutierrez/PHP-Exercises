<?php

    function cabecera($idioma, $titulo){
        echo '<!DOCTYPE html>'.
            '<html lang="'.$idioma.'">'.
                '<head>'.
                    '<meta charset="UTF-8"/>'.
                    '<title>'.$titulo.'</title>'.
                '</head>';
    }

?>