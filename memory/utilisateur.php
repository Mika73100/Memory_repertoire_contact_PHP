<?php 

// Récupérer le contenu de la page initialisation.php
require 'initialisation.php';


try {
//  On nomme  et on donne des valeurs à nos variables
function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}
$utilisateur =  valid_donnees($_POST["utilisateur"]);
$motdepasse =  valid_donnees($_POST["motdepasse"]);

//   Validation des données du formulaire sur serveur via les trois fonctions




// On insère les données recues si les champs spnt remplis (contrer les attaques XXS et l'injection)  

    if(!empty($utilisateur) 
    && strlen ($utilisateur) <= 20
    && preg_match("/^[A-Za-zéè '-]+$/",$utilisateur)
    
    &&!empty($motdepasse) 
    && strlen ($motdepasse) <= 20
    && preg_match("/^[A-Za-zéè '-]+$/",$motdepasse)

    && !empty($utilisateur) && !empty($motdepasse))


    // Ajout d'un nouvel utilisateur :

$util= $conn->prepare("
INSERT INTO utilisateur (Nom_utilisateur, Mot_de_passe)
    VALUES(:utilisateur, :motdepasse)");


$util->bindParam(':utilisateur',$utilisateur);
$util->bindParam(':motdepasse',$motdepasse);

$util->execute();

// Une fois ajouté on revient à la page d'Accueil 

header("location: index.php");

}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>