<?php

header("Content-Type: application.json");

http_response_code(200);

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$conditionProduits=' WHERE nom = "'.$_POST['idd'].'";';

try{
    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sth = $conn->prepare ("SELECT *
                       FROM `projets`
                       $conditionProduits");
$sth->execute();
$produits = $sth->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($produits);
?>