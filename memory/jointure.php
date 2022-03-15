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






?>
