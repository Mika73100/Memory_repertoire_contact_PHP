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

    <title>Connexion</title>
</head>


<body>
    <!-- Les marges -->
    <div class="container">

   <button><a href="inscription.php">Inscription</a></button> 


    <form action="" method="post" class=" vertical-alignment">
            <div class="col-md-12">

              <label for="identifiant" class="form-label">Identifiant</label>
              <input type="text" requierd pattern="^[A-Za-z '-]+$"  maxlength="20" class="form-control" name="identifiant" id="identifiant" placeholder="Entrer votre identifiant" required>
            </div>
          
            <div class="col-12">
              <label for="motdepasse" class="form-label">Mot de passe</label>
              <input type="password" requierd pattern="^[A-Za-z '-]+$"  maxlength="20" class="form-control" name="login" id="motdepasse" placeholder="Entrer le mot de passe" required>
            </div>
          
            <div class="col-12">
            <input type="submit" id='submit' value='CONNEXION'>
            </div>
         



          </form>


          <?php



    // Connexion 
    if(!empty($_POST["identifiant"]) && !empty($_POST["login"])) {
      try {
require 'initialisation.php';
// require 'veriflogin.php';
echo print_r($_SESSION['result']);

$utilisateur = $_POST["identifiant"];
$motdepasse = $_POST["login"];


$util = "SELECT * From utilisateur where Nom_utilisateur='$utilisateur' and Mot_de_passe='$motdepasse'";
$sth = $conn->prepare($util);
$sth->execute();
$result = $sth->fetch();

$_SESSION['result']=$result;
$_SESSION['utilisateur'] = $result['Id'];
} catch (PDOException $e) {
  echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
}
if (!empty($_SESSION['result']) )
{
header("location: index.php");
// echo "Identifiant ou mot de passe incorrect";
}
    
?>
    </div>

</body>

</html>