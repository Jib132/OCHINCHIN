<?php
$databaseHost = 'localhost';
$databaseName = 'akutsunare';
$databaseUsername = 'root';
$databasePassword = '';

try {
    // Renseigner les informations de connexion à la base de données
    $dbConn = new PDO("mysql:host=$databaseHost;dbname=$databaseName",$databaseUsername ,$databasePassword);
    // Le message à afficher si la connexion  a été autorisé.
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Le message  d'erreur à afficher si la connexion  a été refusée.
    echo $e->getMessage();
}



