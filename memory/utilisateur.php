<?php 


try {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "memory";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

try {
$utilisateur = $_POST["utilisateur"];
$motdepasse = $_POST["motdepasse"];

$util= $conn->prepare("
INSERT INTO utilisateur (Nom_utilisateur, Mot_de_passe)
    VALUES(:utilisateur, :motdepasse)");


$util->bindParam(':utilisateur',$utilisateur);
$util->bindParam(':motdepasse',$motdepasse);

$util->execute();


}


catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

?>