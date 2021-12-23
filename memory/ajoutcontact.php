<!DOCTYPE html>
<html lang="fr,en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="./memory.css" rel="stylesheet">

  <title>Ajout contact</title>
</head>

<body>


<!-------- le lien pour crée un login ------------------->

  <?php
  session_start();
  if (empty($_SESSION['result'])) {
    header("location: authentification.php");
    // echo "Identifiant ou mot de passe incorrect";
  }

  ?>
  <div class="container-sm">
  <button><a href="deconnexion.php">Deconnexion</a></button>
<div class="raw">
  


    <!------------------------------------ Logo--------------------------------- -->

    <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a>


    <!-------------------------------------bouton de connection  ------------------->
  

    <!------------------------ Formulaire ajout contact ------------------------->

    <form action="table.php" method="post" class=" vertical-alignment">


            <div class="col">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" requierd pattern="^[A-Za-zéè '-]+$" class="form-control" name="nom" id="nom" maxlength="20" placeholder="Nom" required>
            </div>
            
            
            <div class="col">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" requierd pattern="^[A-Za-zéè '-]+$" class="form-control" name="prenom" id="prenom"  maxlength="20" placeholder="Prénom" required>
            </div>


            <div class="col">
              <label for="mail" class="form-label">Mail</label>
              <input type="email" requierd class="form-control" name="mail" id="mail" placeholder="E-mail" required>
            </div>


    <div class="col">
    <label for="telportable" class="form-label">Numéro de portable</label>
    <input type="tel" class="form-control" name="telportable" id="telportable" placeholder="01 23 45 67 89" minlength="9" maxlength="14" required>
    </div>

    <!-------------------crée un choix dans le formulaire ------------->    
    <div class="col">
    <label for="inputState" class="form-label">Sexe</label>
    <select id="inputState" name="sexe" class="form-select">
    <option value="homme" selected>Homme</option>
    <option value="femme">Femme</option>
    </select>
    </div>

    <!----------------------------------crée un boutton ajouter dans une div ---------->
       
    <div class="col">
    <button type="envoyer" class="btn-primary text-center ">Ajouter</button>
    </div>
    </form>
    </div>
    </div>
    </body>
    </html>