<?php
session_start();
$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";



try{
$conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_SESSION['pseudo'])){  
}else{
    header ('location: ../index.php');
}

if(isset($_GET['nom']) AND !empty($_GET['nom'])){

$getNom = $_GET['nom'];
    
$suppression = $conn->prepare ("SELECT *
                        FROM `projets`
                        WHERE nom = ?");
$suppression->execute(array($getNom));

if($suppression->rowcount() > 0){
    $delete = $conn->prepare ("DELETE
    FROM `projets`
    WHERE nom = ?");
    $delete->execute(array($getNom));
    header('location:backAcceuil.php');

}else{
    echo "Aucun article a été trouvé";
}
}else{
    echo "Aucun identifiant trouvé";
}
$_SESSION['suppression'] = 1;
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>