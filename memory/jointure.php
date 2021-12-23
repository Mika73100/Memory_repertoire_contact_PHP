<?php


require 'initialisation.php';

try
{
$sql = "ALTER TABLE Contact
ADD COLUMN Id_utilisateur INT(10) AFTER Id";

$conn->exec($sql);
echo 'Colonne bien créée !';

} catch (PDOException $e) {
echo "Erreur : " . $e->getMessage();
}


try
{
$sql = "ALTER TABLE Utilisateur
ADD COLUMN Id_utilisateur INT(10) AFTER Id";

$conn->exec($sql);
echo 'Colonne bien créée !';

} catch (PDOException $e) {
echo "Erreur : " . $e->getMessage();
}

try {

    $sth = $dbco->prepare("
    SELECT users.prenom, comments.contenu
    FROM users
    INNER JOIN comments ON users.id = comments.userId
    ");
    $sth-> execute();
    $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($resultat);
    echo '</pre>';

}

catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}





?>
