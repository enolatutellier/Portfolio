<?php // permettra de modifier les article/projet/prestation...

require_once("connexion_bdd.php");

if ($_POST){
    //si les champ du formulaire sont bien rempli 
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["description"]) && !empty($_POST["description"])
    ){
        $id = strip_tags($_GET["id"]);
        $nom = strip_tags($_POST["nom"]);  
        $description =strip_tags($_POST["description"]);

        $requete ="UPDATE exemple SET nom=:nom, description=:description WHERE id=:id";
        $envoi=$db->prepare($requete);

        $envoi->bindValue(":id",$id, PDO::PARAM_INT);
        $envoi->bindValue(":nom",$nom, PDO::PARAM_STR);
        $envoi->bindValue(":description",$description, PDO::PARAM_STR);
        $envoi->execute();

        header("location:index.php");

        }else{
            echo "vous n'avez pas remplie les champs";
        }
    }

if(isset($_GET["id"]) && !empty($_GET["id"])){

  
    require_once("connexion_bdd.php");// on se connecte a la bdd 
    $id = strip_tags($_GET["id"]); //evite les injection de balise html et php

    $requete = "SELECT * FROM exemple WHERE id=:id";
    $envoi = $db->prepare($requete);
    $envoi->bindValue(":id",$id, PDO::PARAM_INT);
    $envoi->execute();

    $resultat=$envoi->fetch();

    if(!$resultat){
        header ("location:index.php");
    }

} else {
    header ("location:index.php");
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
<body>
    
<h1> Modifier un projet </h1>

<form method="POST">
    <div>
        <label for="Nom"><br><br>
            Nom         <br><br>
        </label>
        <input type="text" name="nom" id="nom" value="<?= $resultat["nom"]?>">
                        <br><br>
        <label for="Description">
            Description <br><br>
        </label>
        <input type="text" name="description" id="description" value="<?=$resultat["description"]?>">
                        <br><br>
        <button type="submit">
            Envoie
        </button>
    </div>
</form>
    
</body>
</html>