<?php

require 'initialisation.php';


try {

// Création de la base de donnée 

    $sql = "CREATE DATABASE memory";
    $conn->exec($sql);
    echo 'Base de données bien créée !';

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}



try {

    // Connexion base de données 
     
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "memory";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 

}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>