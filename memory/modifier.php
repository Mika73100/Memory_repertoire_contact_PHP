<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="./memory.css" rel="stylesheet">
    <link rel="icon" type="images/png" href="images-memory\black.png">

    <title>Memory</title>
</head>


<body>
    <!-- Les marges -->
    <div class="col-6">
    <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a> 



    <?php
    
 
require 'initialisation.php';
if (empty($_SESSION['result']) )
    {
header("location: authentification.php");
// echo "Identifiant ou mot de passe incorrect";
}

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telportable = $_POST["telportable"];
    $sexe = $_POST["sexe"];

try  {

    $sth = $conn->prepare(" UPDATE contact SET Nom= :nom, Prenom= :prenom, Mail= :mail, Telportable= :telportable, Sexe= :sexe where Id= :id");


    $sth->bindParam(':nom',$nom);
    $sth->bindParam(':prenom',$prenom);
    $sth->bindParam(':mail',$mail);
    $sth->bindParam(':telportable',$telportable);
    $sth->bindParam(':sexe',$sexe);
    $sth->bindParam(':id', $_GET['id']);


    $sth->execute();




    echo 'Contact modifié';}



        catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

 ?>
    </div>

    <?php
  header('Location: index.php');
  exit();
?>

</body>

</html>