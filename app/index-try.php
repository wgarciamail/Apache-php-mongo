<?php
require_once __DIR__.'/vendor/autoload.php';
//use MongoDB\Driver\Manager as Mongo;
use MongoDB\Client as Mongo;
$mongoHost = '52.87.179.214';
$mongoPort = 53018;

try {
    
    $mongoClient = new Mongo("mongodb://{$mongoHost}:{$mongoPort}");
    //$mongoClient = new Mongo("mongodb://52.87.179.214:53018");
    //echo "Connected to MongoDB successfully!<hr>";
    // Selecciona la base de datos llamada "pruebas"
    $dbTradercom = $mongoClient->Tradercom;
    // Selecciona la colección llamada "usuarios" de la base de datos "pruebas"
    $provider = $dbTradercom->Provider;
    // Coge todos los documentos de la colección
    $cursor = $provider->find()->toArray();
    // Recorre el array de documentos
    echo "<h1>Tradercom - Providers</h1>";
    foreach ($cursor as $provider){
     echo "{$provider->Name} | {$provider->ProviderType} | $provider->Status <br>";
    }

} catch (Exception $e) {
    echo "<hr>Failed to connect to MongoDB: " . $e->getMessage();
}

?>