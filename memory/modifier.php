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

    <title>Modifier</title>
</head>


<body>
    <!-- Les marges -->
    <div class="col-6">
        <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a>



        <?php

// Récupérer le contenu de la page initialisation.php

        require 'initialisation.php';


// Vérification de la connexion 

        if (empty($_SESSION['result'])) {
            header("location: authentification.php");
         
        }


// Préparation de la requête pour modifier des contacts via le formulaire HTML

        $nom = valid_donnees($_POST["nom"]);
        $prenom = valid_donnees($_POST["prenom"]);
        $mail = valid_donnees($_POST["mail"]);
        $telportable = valid_donnees($_POST["telportable"]);
        $sexe = valid_donnees($_POST["sexe"]);

//   Validation des données du formulaire sur serveur via les trois fonctions

        function valid_donnees($donnees)
        {
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        }

/* Si les champs prenom et mail ne sont pas vides et si les donnees ont
     bien la forme attendue...*/
        if (
            !empty($nom)
            && strlen($nom) <= 20
            && preg_match("/^[A-Za-z '-]+$/", $nom)
            && !empty($prenom)
            && strlen($prenom) <= 20
            && preg_match("/^[A-Za-z '-]+$/", $prenom)
            && !empty($mail)
            && filter_var($mail, FILTER_VALIDATE_EMAIL)
            && !empty($telportable)
        ) {

            try {

                // Modifier contact 

                $sth = $conn->prepare(" UPDATE contact SET Nom= :nom, Prenom= :prenom, Mail= :mail, Telportable= :telportable, Sexe= :sexe where Id= :id");


                $sth->bindParam(':nom', $nom);
                $sth->bindParam(':prenom', $prenom);
                $sth->bindParam(':mail', $mail);
                $sth->bindParam(':telportable', $telportable);
                $sth->bindParam(':sexe', $sexe);
                $sth->bindParam(':id', $_GET['id']);


                $sth->execute();




                echo 'Contact modifié';
            } catch (PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
        }
        ?>
    </div>

    <?php
    //header('Location: index.php');
    exit();
    ?>

</body>

</html>