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
    <div class="container">


        <img class="logo" src="images-memory\logomermory.png" alt="Logo memory">

        <a href="ajoutcontact.php"><img class="ajouter" src="images-memory\ajouter.png" alt="Ajouter"></a>


        <!-- Trois colonnes -->
        <div class="row ">


            <?php
// Connexion et tri de la table prénom 

            try {

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "memory";


                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                $tri = "SELECT Prenom From Contact ORDER BY Prenom ";
                $sth = $conn->prepare($tri);
                $sth->execute();
                $result = $sth->fetchAll();
            } catch (PDOException $e) {
                echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
            }

            ?>



            <!-- Colonne 1 -->
            <div id="block1" class="col-md-4">


                <?php


                for ($i = ord('A'); $i <= ord('I'); $i++) {
                    $lettre = chr($i);
                    echo $lettre. '<br>'. '<hr>';

                    for ($y = 0; $y < count($result); $y++) {
                        if ($lettre == strtoupper(substr($result[$y]['Prenom'], 0, 1))) {
                            echo $result[$y]['Prenom']. '<br>'.'<br>';
                        }
                    }
                }

                ?>

            </div>
            <!-- Colonne 2  -->
            <div id="block2" class="col-md-4">
                <?php

                for ($i = ord('J'); $i <= ord('R'); $i++) {
                    $lettre = chr($i);
                    echo $lettre;
                    for ($y = 0; $y < count($result); $y++) {
                        if ($lettre == strtoupper(substr($result[$y]['Prenom'], 0, 1))) {
                            echo $result[$y]['Prenom'];
                        }
                    }
                }


                ?>
            </div>

            <!-- Colonne 3 -->
            <div id="block3" class="col-md-4">
                <?php

                for ($i = ord('S'); $i <= ord('Z'); $i++) {
                    $lettre = chr($i);
                    echo $lettre;
                    for ($y = 0; $y < count($result); $y++) {
                        if ($lettre == strtoupper(substr($result[$y]['Prenom'], 0, 1))) {
                            echo $result[$y]['Prenom'];
                        }
                    }
                }



                ?>

            </div>

        </div>





    </div>

</body>

</html>