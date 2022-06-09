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
    }else{
        header ('location: ../index.php');
    }
?>

    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Déconnexion" />
    </form>          