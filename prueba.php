<?php

require_once __DIR__ . '/vendor/autoload.php';
// el archivo autoload.php contiene el código para que tus librerías se puedan cargar automáticamente, por demanda según se vayan usando
require_once("connect_data.php");
$usuario= $_POST["user"];
$pass= $_POST["pwd"];
//Creación de la collección
$collection = (new MongoDB\Client)->mydb->users;
// Se inserta el array por medio de la sentencia “insertOne”
$insertOneResult = $collection->insertOne([
    'username' => $usuario,
    'password' => $pass,
    
]);

header("Location:adduser.php");

?>