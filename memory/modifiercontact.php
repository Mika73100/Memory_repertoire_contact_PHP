<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="./memory.css" rel="stylesheet">
    <button><a href="deconnexion.php">Deconnexion</a></button>
    <title>Modifier contact</title>
</head>

<body>
<?php


require 'initialisation.php';

if (empty($_SESSION['result']) )
    {
header("location: authentification.php");
// echo "Identifiant ou mot de passe incorrect";
}
// Afficher la fiche contact

try {

    

    $tri = "SELECT * From Contact where Id= ".$_GET['id'];
    $sth = $conn->prepare($tri);
    $sth->execute();
    $result = $sth->fetch();
}

catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>

    <div class="container">


     <!-- Logo -->
    <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a> 

      <div class="row">


<!-- Formulaire modifier contact -->

        <form action="modifier.php?id=<?php echo $result['Id']; ?>" method="post" class=" vertical-alignment">
            
        
            <div class="col-md-12">
              <label for="nom" class="form-label">Nom</label>
              <input type="text"  requierd pattern="^[A-Za-z '-]+$" class="form-control" name="nom" id="nom" placeholder="Nom" value="<?php echo $result['Nom'];  ?>"required maxlength="20">
            </div>

          
            <div class="col-md-12">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text"  requierd pattern="^[A-Za-z '-]+$" class="form-control" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo $result['Prenom']; ?>"required maxlength="20">
            </div>


            <div class="col-md-12">
              <label for="mail" class="form-label">Mail</label>
              <input type="email" requierd pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" class="form-control" name="mail" id="mail" placeholder="E-mail" value=" <?php echo $result['Mail']; ?>" required>
            </div>


            <div class="col-md-12">
              <label for="telportable" class="form-label">Numéro de portable</label>
              <input type="tel" class="form-control" name="telportable" id="telportable" placeholder="01 23 45 67 89" minlength="9" maxlength="14" required value="<?php echo $result['Telportable']; ?>">
            </div>
                    
            
            <div class="col-md-12">
              <label for="inputState" class="form-label">Sexe</label>
              <select id="inputState" name="sexe" class="form-select">
                <option value="homme" <?php if ($result['Sexe'] == 'homme'){ echo "selected";} ?>>Homme</option>
                <option value="femme" <?php if ($result['Sexe'] == 'femme'){ echo "selected";} ?>>Femme</option>
              </select>
            </div>
          
            <div class="col-md-12">
              <button type="envoyer" class="btn btn-primary">Modifier</button>
            </div>
          </form>

          
          </div>
</div>
</body>
</html>