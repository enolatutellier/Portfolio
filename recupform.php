<?php
    $serveur = "localhost";
    $dbname = "portfolio";
    $user = "root";
    $pass = "root";
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname; charset=utf8",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO messages(Nom&Prenom,Mail,Message)
            VALUES(:Nom&Prenom,:Mail,:Message)");
        $sth->bindParam(':Nom&Prenom',$_POST['nom']);
        $sth->bindParam(':Mail',$_POST['mail']);
        $sth->bindParam(':Message',$_POST['message']);
        $sth->execute();

        function valid_donnees($donnees){
            $donnees = trim($donnees);
            $donnees = stripslashes($donnees);
            $donnees = htmlspecialchars($donnees);
            return $donnees;
        $nom = valid_donnees($_POST["nom"]);
        $email = valid_donnees($_POST["email"]);
        $message = valid_donnees($_POST["message"]);
       
    
    }?>
    
    <script type="text/javascript">
    alert("Votre message à bien été envoyé");
    window.location.href="index.php";
    </script>
       
     <?php
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>