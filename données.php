<?php

header("Content-Type: application.json");

http_response_code(200);

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$conditionProduits=' WHERE nom = "'.$_POST['idd'].'";';

function bbcodeToHtml($Outils){
	$Description = "";
	$conv = array(
	'\[button\](.*?)\[\/button\]' => '<button>$1</button>'
	);
	foreach ($conv as $k=>$v){
		$Description = preg_replace('/'.$k.'/',$v,$Outils);
    }
    return $Description;
}

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
for($i=0; $i<count($produits); $i++){
    $produits[$i]["outils"] = bbcodeToHtml($produits[$i]["outils"]);
}
echo json_encode($produits);
?>