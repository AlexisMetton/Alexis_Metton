<?php
session_start();
$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$Num = addslashes(valid_donnees($_POST['Numéroduprojet']));
$Nom = addslashes(valid_donnees($_POST['Nom']));
$Image = addslashes(valid_donnees($_POST['Image']));
$Image1 = addslashes(valid_donnees($_POST['Image1']));
$Image2 = addslashes(valid_donnees($_POST['Image2']));
$Intitule = addslashes(valid_donnees($_POST['Intitulé']));
$Description = addslashes(valid_donnees($_POST['Description']));
$Outils = addslashes(valid_donnees($_POST['Outils']));
$Liens = addslashes(valid_donnees($_POST['liens']));
$Affichage = addslashes(valid_donnees($_POST['affichage']));


function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

try {
    
    if(isset($_SESSION['pseudo'])){  
    }else{
        header ('location: ../index.php');
    }

    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $conn->prepare ("INSERT INTO projets (id_Categorie, nom, image1, image2, image3, intitule, description, outils, liens, affichage)
                            VALUES ('$Num', '$Nom', '$Image', '$Image1', '$Image2', '$Intitule','$Description', '$Outils', '$Liens', '$Affichage')");
    $sth->execute();

    $_SESSION['ajout'] = 1;
    header("Location: backAcceuil.php");
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>