<?php

require_once("connexion.php");


    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    $Nom = valid_donnees($_POST["Nom"]);
    $Mail = valid_donnees($_POST["Mail"]);
    $Message = valid_donnees($_POST["Message"]);
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$servername;dbname=$database; charset=utf8",$username,$mdp);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO formulaire(Nom,Mail,Message)
            VALUES(:Nom,:Mail,:Message)");
        $sth->bindParam(':Nom',$Nom);
        $sth->bindParam(':Mail',$Mail);
        $sth->bindParam(':Message',$Message);
        $sth->execute();

        ?>
        <script type="text/javascript">
            alert("Votre message à bien été envoyé");
            window.location.href="index.php";
        </script>
        <?php
    }
    
    catch(PDOException $e){
        echo '001';
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }

?>