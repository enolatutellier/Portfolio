<?php //cette page affichera le formulaire pour ajouter un article/produit etc
require_once("connexion_bdd.php");

//si on envoie des donnée, si elle existe, et qu'on appuie dessu sur envoie il continuera on verifie qu'il y a qqch dans les cases 
if ($_POST){
    //si les champ du formulaire sont bien rempli 
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["description"]) && !empty($_POST["description"])
    ){
        $nom = strip_tags($_POST["nom"]);  
        $description =strip_tags($_POST["description"]);
        $lien =strip_tags($_POST["lien"]);
        // insere les donnee
        $requete = "INSERT INTO exemple (nom, description, lien)VALUES(:nom, :description, :lien)";
        //securiser les données
        $envoi=$db->prepare($requete);
        $envoi->bindValue(":nom",$nom);
        $envoi->bindValue(":description",$description);
        $envoi->bindValue(":lien",$lien);

        $envoi->execute();
    };
}

?>
<!-- ajouter quelque chose dans la base de donnée dans un formulaire--> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Ajout
    </title>
</head>
<body>
    <h1>Ajout d'un article</h1>
    
    <!-- la methode POST est plus securisante que la methode GET--> 
    <form method="POST">
        <label for="Nom"><br><br>
            Nom         <br><br>
        </label>
        <input type="text" name="nom" id="nom" required>
                        <br><br>
        <label for="Description">
            Description <br><br>
        </label>
        <input type="text" name="description" id="description" required>
                        <br><br>
        <label for="Lien">
            Lien du projet <br><br>
        </label>
        <input type="text" name="lien" id="lien" required> 
                <br><br>
        <label for="image">
            Image
        </label><br><br>
        <input type="text" name="image" id="image" required> 
                        <br><br>
<label for="etat"> Etat </label><br><br>
<input type="radio" name="etat" id="etat" value="visible"> <label>visible </label>
<input type="radio" name="etat" id="etat" value="invisible"> <label> invisible </label>
        <button type="submit">
            Envoie
        </button>

    </form>

    
</body>
</html>