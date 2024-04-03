<html>

    <h1>Viendo los datos</H1>

     echo '<p>Edición 03/04/2024 - A</p>';

    <a href="index.php"> Volver al index</a>

</html>

<?php

    //Nos conectamos a la bbdd
    try {

        echo '<p>Conectando a base de datos...</p>';

        $host = getenv("MYSQL_SERVICE_HOST");
        $user = getenv("MYSQL_USER");
        $pass = getenv("MYSQL_PASSWORD");
        $database =   getenv("MYSQL_NAME");

        //Asignamos la conexión
        $con = new mysqli($host, $user, $pass, $database);

        if(!$con){
            echo '<p>No se ha podido conectar con la bbdd/p>';
        }
        else{

            echo '<p>¡Éxito!</p>';

            //Si se conecta a la base de datos, retorna la conexión    
            return $con;

        }   

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudo conectar a la base de datos. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

?>
