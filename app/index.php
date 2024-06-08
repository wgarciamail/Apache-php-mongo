<?php
require_once __DIR__.'/vendor/autoload.php';
//use MongoDB\Driver\Manager as Mongo;
use MongoDB\Client as Mongo;
$mongoHost = 'mongodb';
$mongoPort = 27017;

try {
    
    $mongoClient = new Mongo("mongodb://{$mongoHost}:{$mongoPort}");
    //var_dump($mongoClient);
    echo "Connected to MongoDB successfully!<hr>";
    //exit;
    // Selecciona la base de datos llamada "pruebas"
    $dbPrueba = $mongoClient->prueba;
    //var_dump($dbTradercom);
    // Selecciona la colección llamada "usuarios" de la base de datos "pruebas"
    $usuarios = $dbPrueba->usuarios;
    //var_dump($usuarios);
    // Inserta un nuevo usuario en la colección
    //$usuarios->insertOne(["usuario" => "antonio", "pass" => "123456"]);

    // Coge todos los documentos de la colección
    $cursor = $usuarios->find()->toArray();
    //var_dump($cursor);
    // Recorre el array de documentos
    foreach ($cursor as $usuarios){
    echo "Usuario: $usuarios->usuario | Password: $usuarios->pass";
    echo"<br>";
    }

} catch (Exception $e) {
    echo "<hr>Failed to connect to MongoDB: " . $e->getMessage();
}

?>