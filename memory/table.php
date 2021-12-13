<?php

try {

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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
    $contact = "CREATE TABLE Contact
    (
Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom VARCHAR(40) NOT NULL,
Prenom VARCHAR(40) NOT NULL,
Telportable  VARCHAR(20) NOT NULL,
Mail VARCHAR(50) NOT NULL)";

    $conn->exec($contact);
    echo 'Table bien créée !';

}

catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telportable = $_POST["telportable"];
    $sexe = $_POST["sexe"];

   

try {
    $contact = $conn->prepare("

    INSERT INTO Contact(nom, prenom, mail, telportable,sexe)
    VALUES(:nom, :prenom, :mail, :telportable, :sexe)");

$contact->bindParam(':nom',$nom);
$contact->bindParam(':prenom',$prenom);
$contact->bindParam(':mail',$mail);
$contact->bindParam(':telportable',$telportable);
$contact->bindParam(':sexe',$sexe);

$contact->execute();

    
}

catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}






?>

