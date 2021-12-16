<?php 

try {

    require 'initialisation.php';


 $utilisateur = "CREATE TABLE Utilisateur
    (

Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nom_utilisateur VARCHAR(100) NOT NULL,
Mot_de_passe VARCHAR(100) NOT NULL)";


    $conn->exec($utilisateur);
    echo 'Table bien créée !';

}


    catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>