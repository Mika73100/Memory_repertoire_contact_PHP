
<?php
// Récupérer le contenu de la page initialisation.php
require 'initialisation.php';

// Préparation de la requête pour ajouter des contacts via le formulaire HTML

$nom =  valid_donnees ($_POST["nom"]);
$prenom =  valid_donnees ($_POST["prenom"]);
$mail =  valid_donnees ($_POST["mail"]);
$telportable =  valid_donnees ($_POST["telportable"]);
$sexe =  valid_donnees ($_POST["sexe"]);

//   Validation des données du formulaire sur serveur via les trois fonctions

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;

}
// On insère les données recues si les champs spnt remplis (contrer les attaques XXS et l'injection)  

    if(!empty($nom) 
    && strlen ($nom) <= 20
    && preg_match("/^[A-Za-zéè '-]+$/",$nom)
    && !empty($prenom)
    && strlen ($prenom) <= 20
    && preg_match("/^[A-Za-zéè '-]+$/",$prenom)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
    && !empty($telportable))
    
try {

//   Ajout nouveau contact

    $contact = $conn->prepare("

    INSERT INTO contact(nom, prenom, mail, telportable, sexe, id_utilisateur)
    VALUES(:nom, :prenom, :mail, :telportable, :sexe, :id)");

    $contact->bindParam(':nom',$nom);
    $contact->bindParam(':prenom',$prenom);
    $contact->bindParam(':mail',$mail);
    $contact->bindParam(':telportable',$telportable);
    $contact->bindParam(':sexe',$sexe);
    $contact->bindParam(':id',$_SESSION['utilisateur']);
    
    $contact->execute();

    
}

catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

// Une fois ajouté on revient à la page d'Accueil
header('Location: ./index.php');



?>
    <?php
  header('Location: ./index.php');
  exit();
?>

