<?php
session_start();
header("Content-Type: application.json");

http_response_code(200);

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$conditionForm = $_COOKIE['nomProjet'];


try{
    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);
    
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }
    
    if(isset($_POST['envoi'])){
        echo $conditionForm;
        $id_Categorie_saisi = valid_donnees($_POST['Numéroduprojet']);
        $nom_saisi = valid_donnees($_POST['Nom']);
        $intitule_saisi = valid_donnees($_POST['Intitulé']);
        $description_saisi = $_POST['Description'];
        $outils_saisi = $_POST['Outils'];
        $liens_saisi = valid_donnees($_POST['Liens']);
        $affichage_saisi = valid_donnees($_POST['affichage']);
        
        if(isset($_COOKIE['fileImage'])){
            $Image_saisi = valid_donnees($_POST['Imagebis']);
        }else{
            $Image_saisi = valid_donnees($_POST['Image']);
        }
        if(isset($_COOKIE['fileImage1'])){
            $Image1_saisi = valid_donnees($_POST['Image1bis']);
        }else{
            $Image1_saisi = valid_donnees($_POST['Image1']);
        }
        if(isset($_COOKIE['fileImage2'])){
            $Image2_saisi = valid_donnees($_POST['Image2bis']);
        }else{
            $Image2_saisi = valid_donnees($_POST['Image2']);
        }
        
        $update = $conn->prepare('UPDATE projets SET id_Categorie = ?, nom = ?, image1=?, image2=?, image3=?, intitule=?, description=?, outils=?, liens=?, affichage=? WHERE nom = ?');
        $update->execute(array($id_Categorie_saisi, $nom_saisi, $Image_saisi, $Image1_saisi, $Image2_saisi, $intitule_saisi, $description_saisi, $outils_saisi, $liens_saisi, $affichage_saisi, $conditionForm));
        $_SESSION['modif'] = 1;
        header('location: backAcceuil.php');
    }