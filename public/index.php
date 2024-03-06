<?php

    //Nos conectamos a la bbdd
    try {

        //Asignamos la conexión
        $db = new mysqli($_ENV['MYSQL_DATABASE'], $_ENV['MYSQL_USER'], $_ENV['MYSQL_PASSWORD'], $dataBase);

        //Si se conecta a la base de datos, retorna la conexión    
        return $db;

    } 
    catch (\Throwable $th) {

        echo("En este momento no se pudo conectar a la base de datos. Disculpe las molestias.\n
            Código de error: " . $th->getCode() . " --> " . $th->getMessage()
        );

        exit;
    }

	echo '<h1>Hola Sergio</H1>';

?>