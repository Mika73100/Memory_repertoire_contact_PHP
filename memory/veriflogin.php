<?php 

require 'initialisation.php';
try {

$utilisateur = $_POST["identifiant"];
$motdepasse = $_POST["login"];


$util = "SELECT * From utilisateur where Nom_utilisateur='$utilisateur' and Mot_de_passe='$motdepasse'";
$sth = $conn->prepare($util);
$sth->execute();
$result = $sth->fetch();
$_SESSION['result']=$result;
if (empty($_SESSION['result']) )
    {
header("location: connexion.php");
// echo "Identifiant ou mot de passe incorrect";


}

else {
    // header("location: authentification.php");
    
    header("location: index.php");
}




}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>