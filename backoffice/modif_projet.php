
<?php 
session_start();

if(!empty($_SESSION['login'])){ // si la session est bien ouverte, du coup sa affiche cet page-ci 

 ?>


<?php // permettra de modifier les article/projet/prestation...

require_once("connexion_bdd.php");

if ($_POST){
    //si les champ du formulaire sont bien rempli 
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["description"]) && !empty($_POST["description"])
        && isset($_POST["lien"]) && !empty($_POST["lien"])
        && isset($_POST["image"]) && !empty($_POST["image"])
        && isset($_POST["etat"]) && !empty($_POST["etat"])
    ){
        $id = strip_tags($_GET["id"]);
        $nom = strip_tags($_POST["nom"]);  
        $description =strip_tags($_POST["description"]);
        $lien =strip_tags($_POST["lien"]);
        $image =strip_tags($_POST["image"]);
        $etat =strip_tags($_POST["etat"]);

        $requete ="UPDATE projet SET nom=:nom, description=:description, lien=:lien, image=:image, etat=:etat WHERE id=:id";
        $envoi=$db->prepare($requete);

        $envoi->bindValue(":id",$id, PDO::PARAM_INT);
        $envoi->bindValue(":nom",$nom, PDO::PARAM_STR);
        $envoi->bindValue(":description",$description, PDO::PARAM_STR);
        $envoi->bindValue(":lien",$lien, PDO::PARAM_STR);
        $envoi->bindValue(":image",$image, PDO::PARAM_STR);
        $envoi->bindValue(":etat",$etat, PDO::PARAM_STR);
        $envoi->execute();

        header("location:backoffice.php");

        }else{
            echo "vous n'avez pas remplie les champs";
        }
    }

if(isset($_GET["id"]) && !empty($_GET["id"])){

  
    require_once("connexion_bdd.php");// on se connecte a la bdd 
    $id = strip_tags($_GET["id"]); //evite les injection de balise html et php

    $requete = "SELECT * FROM projet WHERE id=:id";
    $envoi = $db->prepare($requete);
    $envoi->bindValue(":id",$id, PDO::PARAM_INT);
    $envoi->execute();

    $resultat=$envoi->fetch();

    if($resultat["etat"]=="visible"){ // si le resultat etat = visible alors "checked" sera coché/activé
        $visible="checked";
    } else{ 
        $visible=""; // si le visible est vide du coup ça sera invisible qui sera coché
    }
    $invisible=$resultat["etat"]=="invisible"?"checked":"";

    if(!$resultat){
        header ("location:backoffice.php"); //renvoi au BO
    }

} else {
    echo "Erreur!";
    header ("location:backoffice.php"); //sinon renvoi aussi au BO
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Modification
    </title>
</head>
<header>
    <nav>
        <ul>
            <li>
                <a href="../index.php"> Retour au site </a>
            </li>

            <li>
                <a href="backoffice.php"> Modification Projet </a>
            </li>

            <li>
                <a href="messagerie.php"> Message reçu </a>
            </li> 

            <li>
                <a href="deconnexion.php"> Deconnexion </a>
            </li>
        </ul>
    </nav>
</header>
<body>
    
<h1> Modifier un projet </h1>

<form method="POST">
<label for="Nom"><br><br>
            Nom         <br><br>
        </label>
        <input type="text" name="nom" id="nom" value="<?= $resultat["nom"]?>" required>
                        <br><br>
        <label for="Description">
            Description <br><br>
        </label>
        <input type="text" name="description" id="description" value="<?= $resultat["description"]?>"  required>
                        <br><br>
        <label for="Lien">
            Lien du projet <br><br>
        </label>
        <input type="text" name="lien" id="lien" value="<?= $resultat["lien"]?>" required> 
                <br><br>
        <label for="image">
            Image
        </label><br><br>
        <input type="text" name="image" id="image" value="<?= $resultat["image"]?>" required> 
                        <br><br>
        <label for="etat">Etat</label><br><br>

<input type="radio" name="etat" id="etat" value="visible" <?= $visible?>> <label>visible </label>
<input type="radio" name="etat" id="etat" value="invisible" <?= $invisible?>> <label> invisible </label>
<br><br>
        <button type="submit">
            Envoie
        </button>
</form>
</body>
</html>

<?php 
} 
else{
    echo"interdit"; // protege la page
}
?> 