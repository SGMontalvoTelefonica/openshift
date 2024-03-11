<html>

    <h1>Viendo las variables de entorno</H1>

    <a href="index.php"> Volver al index</a>

</html>

<?php

    try {

        echo '<p>Cargando variables de entorno</p>';

        echo '<p>Cargando la variable "patata"</p>';
        echo "<pre>";
        var_dump(getenv('patata'));
        echo "</pre>";

        echo '<p>Cargando la variable "MYSQL_USER"</p>';
        echo "<pre>";
        var_dump(getenv('MYSQL_USER'));
        echo "</pre>";

        echo '<p>Cargando todas las variables ambientales</p>';
        echo "<pre>";
        var_dump(getenv());
        echo "</pre>";
        
        echo '<p>¡Éxito!</p>';

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudieron obtener variables de entorno. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

?>
