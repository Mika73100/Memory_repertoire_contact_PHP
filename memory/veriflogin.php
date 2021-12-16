<?php 


try {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "memory";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$utilisateur = $_POST["utilisateur"];
$motdepasse = $_POST["motdepasse"];


$util = "SELECT * From utilisateur where Nom_utilisateur=$utilisateur and Mot_de_passe=$motdepasse";
$sth = $conn->prepare($util);
$sth->execute();
$result = $sth->fetch();



}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>