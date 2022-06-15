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

if(isset($_GET['id']) AND !empty($_GET['id'])){

$getid = $_GET['id'];
    
$suppression1 = $conn->prepare ("SELECT *
                        FROM `messages`
                        WHERE id = ?");
$suppression1->execute(array($getid));

if($suppression1->rowcount() > 0){
    $delete = $conn->prepare ("DELETE
    FROM `messages`
    WHERE id = ?");
    $delete->execute(array($getid));
    header('location:backAcceuil.php');

}else{
    echo "Aucun article a été trouvé";
}
}else{
    echo "Aucun identifiant trouvé";
}
$_SESSION['suppression1'] = 1;
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>