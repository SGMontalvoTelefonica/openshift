<html>

    <h1>Viendo las variables de entorno</H1>

    <a href="index.php"> Volver al index</a>

</html>

<?php

    try {

        echo '<p>Cargando variables de entorno</p>';

        echo '<p>Cargando la variable "patata"</p>';
        var_dump(getenv('patata'));

        echo '<p>Cargando la variable "MYSQL_USER"</p>';
        var_dump(getenv('MYSQL_USER'));

        echo '<p>Cargando todas las variables ambientales</p>';
        var_dump(getenv());
        
        echo '<p>¡Éxito!</p>';

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudieron obtener variables de entorno. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

?>
