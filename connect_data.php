<?php
	//Se importan las funciones y métodos del archivo autoload.php en la carpeta vendor.
	require_once __DIR__ . '/vendor/autoload.php';
    //Se instancia una variable llamada $users para crear la conexión.

    //Se hace la conexión con MongoDb, se llama la intancia Client local, en la misma línea se selecciona la base de datos y la colección a usar
    $users = (new MongoDB\Client)->mydb->users; 
	
?>