<?php
    session_start();
    $servname = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "alexis_metton";
    $condition= '';
    $page = '';

    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);

    if(isset($_SESSION['pseudo'])){  
    }
    else{
        header ('location: ../index.php');
    }
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formBack.css"/>
    <title>Alexis_Metton/BackOffice</title>
</head>
<body>
<?php

try {  
    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // pour connexion a BDD  (rajouter variable $condition1 au tout debut code ligne 8)

    $sth = $conn->prepare ('SELECT *
                            FROM `utilisateurs`
                            WHERE pseudo = "'.$_SESSION['pseudo'].'"');   //ici concatener 2 fois pour contenir pseudo , fermer la derniere apostrophe liée à SELECT.

    $sth->execute();

    $administrateur = $sth->fetchAll(PDO::FETCH_ASSOC);
}  
catch (PDOException $e){
echo "Erreur : " . $e->getMessage();
}

?>     

<?php foreach($administrateur as $administrateurs){ ?>
<header>
    <nav>   
        <a href="../index.php"><h1 style="font-size:25px"><?php echo $administrateurs['prenomAdmin'] ?>
            <span style="color: black;
                  text-shadow: 1px 1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, -1px -1px 0 #ffffff, 1px -1px 0 #ffffff, -1px 1px 0 #ffffff, 
                  -1px -1px 0 #ffffff, -1px -1px 0 #ffffff;"><?php echo $administrateurs['nomAdmin'] ?> 
            </span>
        </h1>
        </a>
    <?php 
    } 
    ?>
        <a class="nav-link text-white" onclick="openModal()" style="cursor:pointer;">
            Ajouter un projet
        </a>
        <form action="logout.php" method="post">
            <input type="submit" name="logout" value="Déconnexion" />
        </form>           
    </nav>
</header>
</body>
</html>