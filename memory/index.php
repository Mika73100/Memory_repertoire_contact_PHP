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
    <div class="container">


        <img class="logo" src="images-memory\logomermory.png" alt="Logo memory">

        <a href="ajoutcontact.php"><img class="ajouter" src="images-memory\ajouter.png" alt="Ajouter"></a>



        <div class="row ">
            <div id="block1" class="col-md-4">


                <?php
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


                

                for ($i = ord('A'); $i <= ord('I'); $i++) {
                    $lettre = chr($i);
                    echo ' <div class="accordion-item">
               
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       ' . $lettre . '
                    </button>
                    </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                         <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item\'s accordion body.</div>
                </div>
            </div>
';
                }

                ?>

            </div>

            <div id="block2" class="col-md-4">
                <?php

                for ($i = ord('J'); $i <= ord('R'); $i++) {
                    $lettre = chr($i);
                    echo ' <div class="accordion-item">
               
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       ' . $lettre . '
                    </button>
                    </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                         <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item\'s accordion body.</div>
                </div>
            </div>
';
                }
                ?>
            </div>


            <div id="block3" class="col-md-4">
                <?php

                for ($i = ord('S'); $i <= ord('Z'); $i++) {
                    $lettre = chr($i);
                    echo ' <div class="accordion-item">
               
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                       ' . $lettre . '
                    </button>
                    </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                         <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item\'s accordion body.</div>
                </div>
            </div>
';
                }

                ?>

            </div>

        </div>





    </div>

</body>

</html>