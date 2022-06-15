<?php
session_start();

header("Content-Type: application.json");

http_response_code(200);

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
if(isset($_POST['mess'])){
    $condition=' WHERE id = "'.$_POST['mess'].'";';
}

try{

    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['mess'])){
$sth = $conn ->prepare("SELECT * 
                        FROM `messages` 
                        $condition");
$sth->execute();
$projet = $sth->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($projet);
}
?>