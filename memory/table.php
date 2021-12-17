
<?php

require 'initialisation.php';

// Préparation de la requête pour ajouter des contacts via le formulaire HTML

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telportable = $_POST["telportable"];
    $sexe = $_POST["sexe"];

   

try {
    $contact = $conn->prepare("

    INSERT INTO Contact(nom, prenom, mail, telportable, sexe)
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
    <?php
  header('Location: ./index.php');
  exit();
?>

