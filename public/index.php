<?php

    echo '<h1>Hola Sergio</H1>';

    //Nos conectamos a la bbdd
    try {

        echo '<p>Conectando a base de datos</p>';

        //Asignamos la conexión
        $db = new mysqli($_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $dataBase);

        //Si se conecta a la base de datos, retorna la conexión    
        return $db;

        echo '<p>¡Éxito!/p>';

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudo conectar a la base de datos. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

?>