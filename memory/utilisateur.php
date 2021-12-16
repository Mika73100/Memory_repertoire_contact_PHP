<?php 

require 'initialisation.php';


try {
$utilisateur = $_POST["utilisateur"];
$motdepasse = $_POST["motdepasse"];

$util= $conn->prepare("
INSERT INTO utilisateur (Nom_utilisateur, Mot_de_passe)
    VALUES(:utilisateur, :motdepasse)");


$util->bindParam(':utilisateur',$utilisateur);
$util->bindParam(':motdepasse',$motdepasse);

$util->execute();
header("location: index.php");

}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>