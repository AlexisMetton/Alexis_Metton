<?php

header("Content-Type: application.json");

http_response_code(200);

$servname = "localhost";
$user = "root";
$pass = "";
$dbname = "alexis_metton";
$conditionProduits=' WHERE nom = "'.$_POST['idd'].'";';

function bbcodeToHtml($Outils){
	$TextO = "";
	$conv = array(
	'\[button\](.*?)\[\/button\]' => '<button>$1</button>'
	);
	foreach ($conv as $k=>$v){
		$TextO = preg_replace('/'.$k.'/',$v,$Outils);
    }
    return $TextO;
}

function bbcodeToHtml1($Description){
	$TextD = "";
	$convD = array(
    '\[span\]•\[\/span\](.*)' => '<span>•</span>$1<br>'
	);
	foreach ($convD as $k=>$v){
        $TextD = preg_replace('/'.$k.'/',$v,$Description);
    }
    return $TextD;
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
for($i=0; $i<count($produits); $i++){
    $produits[$i]["description"] = bbcodeToHtml1($produits[$i]["description"]);
}
echo json_encode($produits);
?>