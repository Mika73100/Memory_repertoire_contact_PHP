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

    $contact = "CREATE TABLE Contact
    (
Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(40) NOT NULL,
Prenom VARCHAR(40) NOT NULL,
Telportable  VARCHAR(20) NOT NULL,
Mail VARCHAR(50) NOT NULL,
Sexe VARCHAR (40) NOT NULL)";

    $conn->exec($contact);
    echo 'Table bien créée !';

}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>