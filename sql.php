<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de donnée MySQL </title>
</head>

<body>

    <h1>Bases de données MySql</h1>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";


// 
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $sql = "CREATE DATABASE blog";
        $conn->exec($sql);
      echo 'Base de données bien créée !';

    } catch (PDOException $e) {
        //echo "Erreur : " . $e->getMessage();
    }


    try {


        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "CREATE TABLE Utilisateurs
        (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(40) NOT NULL,
    Mail VARCHAR(50) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    AnneeNaissance INT UNSIGNED NOT NULL, 
    DateInscription TIMESTAMP,
    UNIQUE(Mail))";

        $conn->exec($sql);
        echo 'Table bien créée !';

    } 
    
    catch (PDOException $e) {
       // echo "Erreur : " . $e->getMessage();
    }

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo 'Connexion réussi<br>';

    $sql = "CREATE TABLE Roles
    ( Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Type VARCHAR(40) NOT NULL)
    ";

    $conn->exec($sql);
    echo 'Table Roles bien créée !';

$sql2 = "CREATE TABLE Nombres
( Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Valeur VARCHAR(40) NOT NULL)";

$conn->exec($sql2);
    echo 'Table nombres bien créée !';
}

catch (PDOException $e) {
    //echo "Erreur : " . $e->getMessage();
}

try {
    $sql3= "INSERT INTO Utilisateurs(Nom,Mail,Password,AnneeNaissance) VALUES('Pierre','admin@blog.com','admin123',1992)";
    $conn->exec($sql3);
    
    echo 'Entrée ajoutée dans la table Utilisateurs !<br>';
} 
catch (PDOException $e) {
    //echo "Erreur : " . $e->getMessage();
}


try {
  $sql4= "INSERT INTO Utilisateurs (Nom,Mail,Password,AnneeNaissance) VALUES('Jean','author@blog.com','author123',1968)";
  $conn->exec($sql4);
  echo 'Entrée ajoutée dans la table Utilisateurs !<br>';
} 

catch (PDOException $e) {
    //echo "Erreur : " . $e->getMessage();
}

try {
    $sql5= "INSERT INTO Utilisateurs (Nom,Mail,Password,AnneeNaissance) VALUES('Jean-Pierre ','otherauthor@blog.fr','author456',1989)";
    $conn->exec($sql5);
    echo 'Entrée ajoutée dans la table Utilisateurs !<br>';
  } 
  
  catch (PDOException $e) {
      //echo "Erreur : " . $e->getMessage();
  }

  try {
    $sql6= "INSERT INTO Roles (Type) VALUES('Administrateur')";
    $conn->exec($sql6);
    echo 'Entrée ajoutée dans la table Roles !<br>';
  } 
  
  catch (PDOException $e) {
      //echo "Erreur : " . $e->getMessage();
  }

  try {
    $sql7= "INSERT INTO Roles (Type) VALUES('Auteur')";
    $conn->exec($sql7);
    echo 'Entrée ajoutée dans la table Roles !<br>';

    $conn= null;
  } 
  
  catch (PDOException $e) {

      //echo "Erreur : " . $e->getMessage();
  }


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo 'Connexion réussi<br>';


} catch (PDOException $e) {

   // echo "Erreur : " . $e->getMessage();
}


try {
    
    
    $sql=$conn->prepare("INSERT INTO Utilisateurs (Nom,Mail,Password,AnneeNaissance) VALUES(:nom,:mail,:password,:annee)");

    $nom = "Jeanne";
    $mail ="abonne@gmail.com";
    $password = "abo123";
    $annee = 1992;


    $sql->bindValue(':nom', $nom);
    $sql->bindValue(':mail', $mail);
    $sql->bindValue(':password', $password);
    $sql->bindValue(':annee', $annee);

    $sql->execute();


        echo "Entrée ajoutée dans la table utilisateurs ! </br>";
     

} catch (PDOException $e) {

   // echo "Erreur : " . $e->getMessage();
}

try {
    
    
    $sql1=$conn->prepare("INSERT INTO Utilisateurs (Nom,Mail,Password,AnneeNaissance) VALUES(:nom,:mail,:password,:annee)");

    $nom = "Charlotte";
    $mail ="superauthor@gmail.com";
    $password = " author789 ";
    $annee = 2001;


    $sql1->bindValue(':nom', $nom);
    $sql1->bindValue(':mail', $mail);
    $sql1->bindValue(':password', $password);
    $sql1->bindValue(':annee', $annee);

    $sql1->execute();


        echo "Entrée ajoutée dans la table utilisateurs ! </br>";
     

} catch (PDOException $e) {

   // echo "Erreur : " . $e->getMessage();
}

try {
    
    
    $sql2=$conn->prepare("INSERT INTO Utilisateurs (Nom,Mail,Password,AnneeNaissance) VALUES(:nom,:mail,:password,:annee)");

    $nom = "Justine";
    $mail ="newauthor@blog.fr ";
    $password = "authorazerty";
    $annee = 2004;


    $sql2->bindValue(':nom', $nom);
    $sql2->bindValue(':mail', $mail);
    $sql2->bindValue(':password', $password);
    $sql2->bindValue(':annee', $annee);

    $sql2->execute();


        echo "Entrée ajoutée dans la table utilisateurs ! </br>";
     echo "Ajout de donnée(s) dans la table Roles<br>";

} catch (PDOException $e) {

    //echo "Erreur : " . $e->getMessage();
}
try {
    $sql=$conn->prepare("INSERT INTO Roles (Type) VALUES(:type)");

    $type = "Abonne";

    $sql->bindValue(':type', $type);
   
    $sql->execute();


        echo "Entrée ajoutée dans la table Roles ! </br>";
        $conn= null;

} catch (PDOException $e) {

   // echo "Erreur : " . $e->getMessage();
}



try {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blog";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo 'Connexion réussi<br>';


} catch (PDOException $e) {

    //echo "Erreur : " . $e->getMessage();
}

try { $sql= "ALTER TABLE utilisateurs ADD Role VARCHAR(40) NOT NULL";

  $conn->exec($sql);
  echo 'Colonne ajoutée dans la table Utilisateurs !<br>';

} 
catch (PDOException $e) {

    //echo "Erreur : " . $e->getMessage();
}

try { $sql= "ALTER TABLE utilisateurs ADD NbArticles INT UNSIGNED NOT NULL";

    $conn->exec($sql);
    echo 'Colonne ajoutée dans la table Utilisateurs !<br>';
  
  } 
  
  catch (PDOException $e) {
  
      //echo "Erreur : " . $e->getMessage();
  }

try {
    $sql= "ALTER TABLE Utilisateurs MODIFY `Role` INT NOT NULL";
 
    $conn->exec($sql);
    echo 'Colonne ajoutée dans la table Utilisateurs !<br>';
  
  } 
  catch (PDOException $e) {
  
    echo "Erreur : " . $e->getMessage();
}
    ?>
</body>

</html>