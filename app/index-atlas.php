<?php
require_once __DIR__.'/vendor/autoload.php';

$uri = "mongodb+srv://wgarciamail:WRstY8eJ4oLclv5J@todo-example.b2340xz.mongodb.net/test?ssl=true&retryWrites=true&w=majority";

// Specify Stable API version 1
//$apiVersion = new ServerApi(ServerApi::V1);

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);

try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('admin')->command(['ping' => 1]);
    echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}


?>