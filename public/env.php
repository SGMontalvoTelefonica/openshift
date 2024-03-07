<html>

    <h1>Viendo las variables de entorno</H1>

    <a href="index.php"> Volver al index</a>

</html>

<?php

    try {

        echo '<p>Cargando variables de entorno</p>';

        var_dump(getenv('patata'));

        echo '<p>¡Éxito!/p>';

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudieron obtener variables de entorno. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

?>