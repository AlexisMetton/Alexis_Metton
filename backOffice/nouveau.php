<?php
session_start();
$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$Num = valid_donnees($_POST['Numéroduprojet']);
$Nom = valid_donnees($_POST['Nom']);
$Image1 = valid_donnees($_POST['Image1']);
$Image2 = valid_donnees($_POST['Image2']);
$Image3 = valid_donnees($_POST['Image3']);
$Intitule = valid_donnees($_POST['Intitulé']);
$Description = valid_donnees($_POST['Description']);
$Outils = valid_donnees($_POST['Outils']);


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

    $sth = $conn->prepare ("INSERT INTO projets (id_Categorie, nom, image1, image2, image3, intitule, description, outils)
                            VALUES ('$Num', '$Nom', '$Image1', '$Image2', '$Image3', '$Intitule','$Description', '$Outils')");
    $sth->execute();

    $_SESSION['ajout'] = 1;
    header("Location: backAcceuil.php");
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>