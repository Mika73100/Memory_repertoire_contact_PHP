<?php

try {
// Connexion Serveur 

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Création de la base de donnée 

    $sql = "CREATE DATABASE memory";
    $conn->exec($sql);
    echo 'Base de données bien créée !';

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}



try {

    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "memory";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Création table Contact 

}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>