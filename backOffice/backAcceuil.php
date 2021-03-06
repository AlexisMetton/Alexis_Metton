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

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="../bbCode/markitup/jquery.markitup.js"></script>
    <script type="text/javascript" src="../bbCode/markitup/sets/default/set.js"></script>
    <link rel="stylesheet" type="text/css" href="../bbCode/markitup/skins/simple/style.css">
    <link rel="stylesheet" type="text/css" href="../bbCode/markitup/sets/default/style.css">
    <script type="text/javascript">
        $(function() {
	        // Add markItUp! to your textarea in one line
	        // $('textarea').markItUp( { Settings }, { OptionalExtraSettings } );
	        $('textarea').markItUp(mySettings);
        });
    </script>
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
        <div class="main-contain"></div>
            <div class="div">
                <div class="flex-1">
                    <a href="../index.php"><button type="submit" name="logout"class="button btn-1"><h1 style="font-size:25px;"><?php echo $administrateurs['prenomAdmin'] ?>
                    <span><?php echo $administrateurs['nomAdmin'] ?></span>
                    </h1></button></a>
                </div>
            </div>
        </div>
    <?php 
    } 
    ?>
        <form action="logout.php" method="post">
            <div class="main-contain"></div>
                <div class="div">
                    <div class="flex-1">
                        <button type="submit" name="logout"class="button btn-1">Déconnexion</button>
                    </div>
                </div>
            </div>
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
                    $ajout = "*Nouveau projet bien créé";
                    echo "<div id='ajout' style='color: #2a7a1f;
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$ajout ."</div>";
                    unset($_SESSION['ajout']);
                }
                
                if(isset($_SESSION['suppression'])){
                    $suppression = "*Projet bien supprimé";
                    echo "<div id='suppression' style='color: rgb(255, 88, 88);
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$suppression ."</div>";
                    unset($_SESSION['suppression']);
                }

                if(isset($_SESSION['suppression1'])){
                    $suppression = "*Message bien supprimé";
                    echo "<div id='suppression' style='color: rgb(255, 88, 88);
                    text-align: center;
                    margin-bottom: 2px;
                    font-family: 'Inter-Bold';'>" .$suppression ."</div>";
                    unset($_SESSION['suppression1']);
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
            <a onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?');" class="croix" style="float:right;margin-right:10px;margin-bottom: 2px" href="supprimer.php?nom=<?php echo $projets['nom']; ?>">
                <button style="color:whitesmoke; background-color:transparent; border-color:whitesmoke;padding:5px;border-radius:5px;cursor:pointer;">&times;</button>
            </a>
                <div class="projet" id="projet">
                    <img src="../img/<?php echo $projets['image1']; ?>" id="<?php echo $projets['nom']; ?>" onclick="openModal(event)" style="cursor:pointer;">
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
                        <input type="number" name="Numéroduprojet" class="form-control" placeholder="N° projet"  min="1" max="50" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Nom" class="form-control" placeholder="Nom"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image" class="form-control" placeholder="nomImage1.jpg"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image1" class="form-control" placeholder="nomImage2.jpg"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="Image2" class="form-control" placeholder="nomImage3.jpg"  autocomplete="off" required>
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
                        <input type="text" name="liens" class="form-control" placeholder="Liens"  autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="affichage" class="form-control" placeholder="0 (cacher) ou 1 (visible)" min="0" max="1" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <section class="portfolio-experiment">
                        <button style="margin-top:10px" type="submit" name="envoi">
                            <span class="text">Validez</span>
                            <span class="line -right"></span>
                            <span class="line -top"></span>
                            <span class="line -left"></span>
                            <span class="line -bottom"></span>
                        </button>
                        </section>
                    </div>   
                </form>     
</div> 
<div id="popup">

</div>
<section id="section_3">
    <h1>Messages Reçus</h1>
    <?php
        $servname = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "alexis_metton";
        $condition= '';
        $page = '';
    
        $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);
    try {
    $conn = new PDO("mysql:host=$servname;dbname=$dbname",$user, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sth = $conn->prepare ("SELECT *
                            FROM messages
                            ORDER BY id DESC;");
    $sth->execute();

    $message = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>   
        <table>
            <tr>
                <th>Supp</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
<?php 
    foreach($message as $messages){
?>
    <tr>
        <td><a onclick="return confirm('Voulez-vous vraiment supprimer ce message ?');" href="suppMessage.php?id=<?php echo $messages['id']; ?>"><img id="<?php echo $messages['id']; ?>" src="../img/corbeille.png" height="25px">
        <td><?php echo $messages['Nom']; ?></td>
        <td><?php echo $messages['Prenom']; ?></td>
        <td><?php echo $messages['Email']; ?></td>
        <?php
        if($messages['ouvert'] == "1"){?>
            <td class="voir" id="ouvert<?php echo $messages['id']?>" style="background-color:rgb(27,27,27);"><div class="message" id="<?php echo $messages['id']; ?>" onclick="voir(event)">Voir</div></td><?php
        }else{?>
            <td class="voir" id="ouvert<?php echo $messages['id']?>" style="background-color:rgb(123,102,255);"><div class="message" id="<?php echo $messages['id']; ?>" onclick="voir(event)">Voir</div></td><?php
        }
        ?>
    </tr>
<?php
}
?>
</table>
</section>
<div id="popup2">

</div>
</body>
</html>
<script src="backJavaScript.js"></script>