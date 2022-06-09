<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" href="img/Projecteur.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/produits.css"/>
    <link rel="stylesheet" href="CSS/form.css"/>
    <title>Alexis_Metton/Connexion</title>
</head>
<body>
    <header>
        <nav>
            <a href="#section_2">PROFIL <img class="rond" src="img/rond.svg" height="10px"></a>
            <a href="#section_3">COMPETENCES <img class="rond" src="img/rond.svg" height="10px"></a>
            <a href=""><img src=img/logo.svg height="50px" style="padding-top:15px;transform:scale(1.9);"></a>
            <!--<a href=""><p><span class="A">A</span><span class="M">M</span></p></a>-->
            <a href="#section_4">PROJETS <img class="rond" src="img/rond.svg" height="10px"></a>
            <a href="#section_5">CONTACT <img class="rond" src="img/rond.svg" height="10px"></a>
            <img id="burger" class="burger" src="img/burger.svg" height="30px" onclick="menu()">
            <img id="croix" style="display: none;" class="croix" src="img/croix.svg" height="30px" onclick="menu1()">
        </nav>
        <div id="nav" class="nav">
            <div>
                <a style="margin-right: 5px;" href="#section_2">PROFIL</a>
                <a style="margin-left: 5px;" href="#section_3">COMPETENCES</a>
            </div>
            <div>
                <a style="margin-right: 5px;" href="#section_4">PROJETS</a>
                <a style="margin-left: 5px;" href="#section_5">CONTACT</a>
            </div>
        </div>
    </header>
    <section id="section_1">
    <div class="absolute">
        <div><img src="img/hautform.svg"></div>
        <div style="display: grid;grid-template-rows: 1fr;" >
        <div class="login-form" id="formulaire">
        <?php
    session_start();
    $servname = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "alexis_metton";

    $conn = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8",$user, $pass);


    if(isset($_POST['envoi'])){       
        if(!empty($_POST['administrateur']) && !empty($_POST['password']))
        {
        $pseudo = htmlspecialchars($_POST['administrateur']);
        $mdp = sha1($_POST['password']);    //sha1 cryptage = sécu

        $recupUser = $conn->prepare("SELECT * FROM utilisateurs WHERE pseudo = ? AND mdp = ?");          // mettre son prénom et si c bon renvoi à ma page sinon n 'existe pas!
        $recupUser -> execute(array($pseudo, $mdp));



        if($recupUser->rowCount() > 0){            // rowcount = nb de lignes ici pseudo+mdp ok
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $reussie = "connexion réussie";
            echo "<div id='reussie'>" .$reussie ."</div>";
            header("Location: backOffice/backAcceuil.php");
        }else{        
            $erreur = "*pseudo ou mot de passe incorrect...";
            echo "<div id='erreur'>" .$erreur ."</div>";
        }
        }else{
            $incomplet = "*Veuillez compléter tous les champs";
            echo "<div id='incomplet'>" .$incomplet ."</div>";
        }
        
    }
    ?>
            <form action="" method="post">
                <h2 class="text-center">Connexion</h2>       
                <div class="form-group">
                    <input type="text" name="administrateur" class="form-control" placeholder="pseudo"  autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe"  autocomplete="off" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="envoi" class="btn btn-primary btn-block">Connexion</button>
                </div>   
            </form>
        </div>
        </div>
        <div><img src="img/basform.svg"></div>
    </div><br><br>
    </section>
</body>
</html>
<script src="JavaScript/JavaScript.js"></script>