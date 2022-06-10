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
try {
    $conn = new PDO("mysql:host=$servname;dbname=$dbname",$user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $conn->prepare ("SELECT id_Categorie, nom, image1
                            FROM projets");
    $sth->execute();

    $projet = $sth->fetchAll(PDO::FETCH_ASSOC);
}
catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>     

<?php foreach($administrateur as $administrateurs){ ?>
<header>
    <nav>   
        <a href="../index.php">
            <h1 style="font-size:25px"><?php echo $administrateurs['prenomAdmin'] ?>
            <span><?php echo $administrateurs['nomAdmin'] ?></span>
            </h1>
        </a>
    <?php 
    } 
    ?>
        <form action="logout.php" method="post">
            <input type="submit" name="logout" value="Déconnexion" />
        </form>           
    </nav>
</header>
<section id="section_1" class="portfolio-experiment">
    <a onclick="popupNouveau()" style="text-decoration: none;">
        <span class="text">Ajouter un projet</span>
        <span class="line -right"></span>
        <span class="line -top"></span>
        <span class="line -left"></span>
        <span class="line -bottom"></span>
    </a>
</section>
<?php
             $servname = "localhost";
             $user = "root";
             $pass = "";
             $dbname = "enlight_meal";
            
            try{
                if(isset($_SESSION['ajout'])){
                    $ajout = "*Nouveau restaurant bien créé";
                    echo "<div id='ajout' style='color: #2a7a1f;
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$ajout ."</div>";
                    unset($_SESSION['ajout']);
                }
                
                if(isset($_SESSION['suppression'])){
                    $suppression = "*Restaurant bien supprimé";
                    echo "<div id='suppression' style='color: rgb(255, 88, 88);
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$suppression ."</div>";
                    unset($_SESSION['suppression']);
                }

                if(isset($_SESSION['modif'])){
                    $modif = "*Modification bien prise en compte";
                    echo "<div id='modif' style='color: rgb(255, 173, 80);
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$modif ."</div>";
                    unset($_SESSION['modif']);
                }
            } 
            catch (PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
            ?>
<section id="section_2">
    <div class="cadre">
            <?php
                foreach($projet as $projets){
            ?>
            <div style="margin-left: 5px; margin-right: 5px;">
            <a onclick="return confirm('Voulez-vous vraiment supprimer ce restaurant ?');" class="croix" style="float:right" href="supprimer.php?nom=<?php echo $projets['nom']; ?>">
                <button style="color:whitesmoke; background-color:transparent; border-color:whitesmoke">&times;</button>
            </a>
                <div class="projet" id="projet" onclick="openModal<?php echo $projets['id_Categorie']; ?>()">
                    <img src="../img/<?php echo $projets['image1']; ?>">
                </div>
            </div>
            <?php
                }
            ?>
    </div>
</section>
<div id="overlay" class="overlay" onclick="closeAvecOverlay()">

</div>
<div id="popup1">
<form action="nouveau.php" method="post">
                    <h2 class="text-center" style="color:whitesmoke;margin-top:20px">Ajouter un projet</h2>       
                    <div class="form-group">
                        <input type="number" name="Numéroduprojet" class="form-control" placeholder="*"  min="1" max="50" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Nom" class="form-control" placeholder="Nom"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image1" class="form-control" placeholder="nomImage1.jpg"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image2" class="form-control" placeholder="nomImage2.jpg"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image3" class="form-control" placeholder="nomImage3.jpg"  autocomplete="off" required>
                    </div>     
                    <div class="form-group">
                        <input type="text" name="Intitulé" class="form-control" placeholder="Titre"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <textarea cols="33" rows="15" name="Description" class="form-control" maxlength="100000" placeholder="Description"  autocomplete="off" required></textarea>
                    </div>
                    <div class="form-group">
                        <textarea cols="33" rows="15" name="Outils" class="form-control" maxlength="100000" placeholder="Outils"  autocomplete="off" required></textarea>
                    </div>
                    <div class="form-group">
                        <section class="portfolio-experiment">
                        <a style="text-decoration: none;">
                            <span class="text"><button type="submit" name="envoi">Validez</button></span>
                            <span class="line -right"></span>
                            <span class="line -top"></span>
                            <span class="line -left"></span>
                            <span class="line -bottom"></span>
                        </a>
                        </section>
                    </div>   
                </form>     
</div> 
</body>
</html>
<script src="backJavaScript.js"></script>