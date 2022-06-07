<!DOCTYPE html>
<html lang="fr">
<head>
    <!--<link rel="icon" href="img/Projecteur.png">-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/form.css"/>
    <title>Alexis Metton</title>
</head>
<body>
<?php
        if(isset($_COOKIE['cookieForm'])){
    ?>
            <?php setcookie('cookieForm', 1, time()-3600);?>
            <p id="cookieForm" class="cookieForm" style="color:whitesmoke; text-shadow:0px 0px 10px rgba(123,102,255)">Formulaire bien envoyé !</p>
    <?php
        }
    ?>
    <header>
        <nav>
            <a href="#section_2">PROFIL <img class="rond" src="img/rond.svg" height="10px"></a>
            <a href="#section_3">COMPETENCES <img class="rond" src="img/rond.svg" height="10px"></a>
            <a href=""><p><span class="A">A</span><span class="M">M</span></p></a>
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
    <div>
        <div><img src="img/hautform.svg"></div>
        <div style="display: grid;grid-template-rows: 1fr 1fr;" >
            <marquee behavior="alternate"><h1><span>W</span>EB <span>D</span>EVELOPER</h1></marquee>
            <marquee behavior="alternate" direction="right"><h1><span>F</span>ULL <span>S</span>TACK</h1></marquee>
        </div>
        <div><img src="img/basform.svg"></div>
    </div><br><br>
    <h1 class="nom" id="nom">ALEXIS METTON</h1><br><br>
        <a href="#section_2"><img class="fleche" src="img/fleche.svg" height="50px"></a>
        <a href="#section_2"><img class="fleche2" src="img/fleche.svg" height="50px"></a>
        <a href="#section_2"><img class="fleche3" src="img/fleche.svg" height="50px"></a>
    </section>
    <section id="section_2">
        <div class="recadre"></div>
        <div class="portrait">
            <img src="img/Screenshot_20220531_180703-removebg-preview.png" alt="emoji alexis metton">
        </div>
        <div class="nom">
            <h1>ALEXIS METTON</h1>
        </div>
        <p>&ensp; &ensp; &ensp; &ensp;Durant mon parcours scolaire, j’ai eu l’opportunité de découvrir de nombreux secteurs d’activité (Commerce, Marketing, Comptabilité, Gestion…). Nonobstant, c’est en travaillant en autodidacte que j’ai construit mon attrait tout particulier pour l’informatique, principalement le développement web et la conception de jeux/applications. Depuis le 7 Mars 2022, j’ai intégré la formation « Access Code School : Développeur Web et Web Mobile » où j’ai eu l’opportunité de développer mes connaissances en informatique. Effectivement, par de nombreux projets j’ai pu approfondir et acquérir de nouvelles connaissances dans les langages de programmation : HTML, CSS, JavaScript, PHP ainsi que d’autres outils impérieux pour le développement web : Git, GitHub, Laragon, Bootstrap, etc.</p>
        <a href="download/CV - ALEXIS METTON.pdf" download="CV - ALEXIS METTON.pdf"><p class="CV">Mon CV</p></a>
        <a href="#section_3"><img class="fleche" src="img/fleche.svg" height="50px"></a>
        <a href="#section_3"><img class="fleche2" src="img/fleche.svg" height="50px"></a>
        <a href="#section_3"><img class="fleche3" src="img/fleche.svg" height="50px"></a>
    </section>
    <section id="section_3">
        <p class="titre">En savoir plus sur mon parcours, mes formations, mon expérience professionnelle...</p>
        <div class="recadre"></div>
        <div class="logo">
            <img src="img/html.png" height="100px">
            <img src="img/css-3.png" height="100px">
            <img src="img/php.png" height="100px">
            <img src="img/bootstrap.png" height="100px">
            <img src="img/git.png" height="100px">
            <img src="img/github.png" height="100px">
            <img src="img/js.png" height="100px">
            <img src="img/unity.png" height="100px">
            <img src="img/wordpress.png" height="100px">
            <img src="img/figma.png" height="100px">
            <img src="img/mysql.png" height="100px">
            <img src="img/vscode.png" height="100px">
        </div>
        <div class="travail">
            <div class="comp">
                <img src="img/web.png" height="50px">
                <h2>Développement Web</h2><br>
                <p>Intégration HTML et CSS, front-end javascript, back-end php et mySQL.</p>
            </div>
            <div class="comp">
                <img src="img/smartphone.png" height="50px">
                <h2>Expérience Utilisateur</h2><br>
                <p>Sites et applications responsives, conception d'interfaces ergonomiques.</p>
            </div>
        </div>
        <div class="parcours" style="margin-left: 5px;margin-right: 5px;">
            <div class="cercle" id="cercle1" onclick="bullebac()">
                <h3>2017</h3>
            </div><img src="img/ligne.jpg" height="3px" width="10px" style="margin-top: 45px;">
            <div class="cercle" id="cercle2" onclick="bulleiut()">
                <h3>2018</h3>
            </div><img src="img/ligne.jpg" height="3px" width="10px" style="margin-top: 45px;">
            <div class="cercle" id="cercle3" onclick="bullebts()">
                <h3>2020</h3>
            </div><img src="img/ligne.jpg" height="3px" width="10px" style="margin-top: 45px;">
            <div class="cercle" id="cercle4" onclick="bulledcg()">
                <h3>2021</h3>
            </div><img src="img/ligne.jpg" height="3px" width="10px" style="margin-top: 45px;">
            <div class="cercle" id="cercle5" onclick="bulleacs()">
                <h3>2022</h3>
            </div>
        </div>
        <div class="infos">
            <p class="bac" id="bac">BACCALAURÉAT ÉCONOMIQUES ET SOCIAL <br>• Mention Assez Bien • <br>LYCÉE MAURICE GENEVOIX (Decize, 58300)</p>
            <p class="iut" id="iut">1° ANNÉE DUT TECHNIQUES DE COMMERCIALISATION <br>• Étude axée sur le Commerce et le Marketing • <br>IUT D’ALLIER (Moulins, 03000)</p>
            <p class="bts" id="bts">BTS COMPTABILITÉ ET GESTION <br>• Obtention avec 16,88 de moyenne • <br>LYCÉE JEAN MONNET (Moulins,03000)</p>
            <p class="dcg" id="dcg">2° ANNÉE LICENCE DCG <br>• Diplôme Comptabilité et Gestion • <br>LYCÉE SIDOINE APOLLINAIRE (Clermont-Ferrand, 63000)</p>
            <p class="acs" id="acs">FORMATION ACCESS CODE SCHOOL <br>• Axée sur le Développement Web • <br>ONLINEFORMAPRO (Nevers, 58000)</p>
        </div>
        <a href="#section_4"><img class="fleche" src="img/fleche.svg" height="50px"></a>
        <a href="#section_4"><img class="fleche2" src="img/fleche.svg" height="50px"></a>
        <a href="#section_4"><img class="fleche3" src="img/fleche.svg" height="50px"></a>
    </section>
    <section id="section_4">
        <div class="cadre">
            <p>Découvrez quelques projets réalisés</p>
            <div class="projet" id="projet1" onclick="openModal1()">
                <img src="img/jadoo.png">
            </div>
            <div class="projet" id="projet2" onclick="openModal2()">
                <img src="img/travelers.png">
            </div>
            <div class="projet" id="projet3" onclick="openModal3()">
                <img src="img/enlight.png">
            </div>
        </div>
        <a href="#section_5"><img class="fleche" src="img/fleche.svg" height="50px"></a>
        <a href="#section_5"><img class="fleche2" src="img/fleche.svg" height="50px"></a>
        <a href="#section_5"><img class="fleche3" src="img/fleche.svg" height="50px"></a>
    </section>
    <section id="section_5">
        <article class="ligne">
            <form method="post" action="formulaire.php" class="colonne">
                <h5>Me Contacter</h5>
                <div class="img"></div>
                <div class="ligne">
                    <p class="colonne">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" placeholder="Nom" minlength="2" maxlength="25" required>
                    </p>
                    <p class="colonne">
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" placeholder="Prenom" minlength="2" maxlength="25" required>
                    </p>
                </div>
                <p class="colonne">
                    <label for="mail">Adresse mail :</label>
                    <input type="email" name="mail" placeholder="monAdresseMail@gmail.com" required>
                </p>
                <p class="colonne">
                    <label for="demande">Votre demande :</label>
                    <textarea name="message" rows="4" placeholder="Votre demande" required></textarea>
                </p>
                <input type="submit" value="Envoyer">
            </form>
        </article>
    </section>
    <footer>
        <div class="ligne">
            <div id="logofooter">
                <a href="#"><p><span class="A">A</span><span class="M">M</span></p></a><br><br>
                <a href="mentions.html">Mentions légales</a>
            </div>
            <div id="reseaux">
                <h3>Pour en savoir plus...</h3>
                <div class="ligne1">
                    <a href="https://github.com/AlexisMetton" target="_blank"><button><img src="img/github.png" alt="Github" height="80px"></button></a>
                    <button><img src="img/linkedin.png" alt="Linkedin" height="80px"></button>
                </div>
            </div>
        </div><br><br>
        <p class="droit">Tous droits réservés @Alexis Metton</p>
    </footer>
    <div id="scroll_to_top">
        <a href="#top">
            <img src="img/scrollTop.svg" height="20px">
        </a>
    </div>
    <div id="overlay" class="overlay" onclick="closeAvecOverlay()">

    </div>
    <div id="popup1">
        <!--<span onclick="closeModal1()" id="btnClose" class="btnClose">&times;</span>-->
        <img class="imageRestau1" id="imageRestau1" src="img/jadoo.png">
        </img>
        <!--<div class="gauche" id="gauche" src="img/jadoo.png">
            <img src="img/droite.png" height="30px">
        </div>-->
        <img class="imageRestau2" id="imageRestau2" src="img/jadoo2.png">
        </img>
        <img class="imageRestau3" id="imageRestau3" src="img/jadoo3.png">
        </img>
        <h3>Site Web</h3>
        <h1>Jadoo</h1>
        <p style="margin-bottom: 10px;">
            <span>•</span>Intégration HTML - CSS
            <br><span>•</span>Site web responsive
            <br><span>•</span>Réalisation d'animations - keyframes
            <br><span>•</span>Base de donnée SQL - PHPmyAdmin
            <br><span>•</span>Communication avec la base de donnée en PHP
        </p>
        <div class="utilisation" style="margin-bottom:10px">
            <button>HTML</button>
            <button>CSS</button>
            <button>PHP</button>
            <button>MySQL</button>
        </div>
        <div class="liens" style="margin-bottom: 10px;">
            <a href="https://github.com/AlexisMetton/Jadoo" target="_blank"><button><img src="img/github.png" height="10px" style="margin-right: 5px;">Git Hub</button></a>
        </div>
    </div> 
    <div id="popup2">
        <img class="imageRestau1" id="imageRestau1" src="img/travelers.PNG">
        </img>
        <!--<div class="gauche" id="gauche" src="img/jadoo.png">
            <img src="img/droite.png" height="30px">
        </div>-->
        <img class="imageRestau2" id="imageRestau2" src="img/travelers2.PNG">
        </img>
        <img class="imageRestau3" id="imageRestau3" src="img/travelers3.PNG">
        </img>
        <h3>Site Web</h3>
        <h1>Traveler's Life</h1>
        <p style="margin-bottom: 10px;">
            <span>•</span>Création d'une maquette sur Paint
            <br><span>•</span>Intégration HTML - CSS
            <br><span>•</span>Site web responsive
            <br><span>•</span>Réalisation d'animations - keyframes
            <br><span>•</span>Création d'intéractions avec JavaScript
        </p>
        <div class="utilisation" style="margin-bottom:10px">
            <button>HTML</button>
            <button>CSS</button>
            <button>JavaScript</button>
            <button>Paint</button>
        </div>
        <div class="liens" style="margin-bottom: 10px;">
            <a href="https://github.com/AlexisMetton/Travelers_Life" target="_blank"><button><img src="img/github.png" height="10px" style="margin-right: 5px;">Git Hub</button></a>
        </div>
    </div> 
    <div id="popup3">
        <img class="imageRestau1" id="imageRestau1" src="img/enlight.PNG">
        </img>
    <!--<div class="gauche" id="gauche" src="img/jadoo.png">
        <img src="img/droite.png" height="30px">
    </div>-->
    <img class="imageRestau2" id="imageRestau2">
    </img>
    <img class="imageRestau3" id="imageRestau3">
    </img>
    <h3>Site Web</h3>
    <h1>Enlight Meal</h1>
    <p style="margin-bottom: 10px;">
        <span>•</span>Création d'une maquette sur Figma
        <br><span>•</span>Intégration HTML - CSS
        <br><span>•</span>Site web responsive
        <br><span>•</span>Réalisation d'animations - keyframes
        <br><span>•</span>Création d'intéractions avec JavaScript
        <br><span>•</span>Système de login utilisateur
        <br><span>•</span>Base de donnée SQL - PHPmyAdmin
        <br><span>•</span>Communication avec la base de donnée en PHP
        <br><span>•</span>Génération du contenu et messages utilisateur avec PHP/Javascript/Ajax
    </p>
    <div class="utilisation" style="margin-bottom:10px">
        <button>HTML</button>
        <button>CSS</button>
        <button>Javascript</button>
        <button>PHP</button>
        <button>MySql</button>
        <button>Ajax</button>
        <button>Bootstrap</button>
        <button>Figma</button>
    </div>
    <div class="liens" style="margin-bottom: 10px;">
        <a href="https://github.com/AlexisMetton/Enlight-Meal" target="_blank"><button><img src="img/github.png" height="10px" style="margin-right: 5px;">Git Hub</button></a>
    </div>
    </div> 
</body>
</html>
<script src="JavaScript/JavaScipt.js"></script>