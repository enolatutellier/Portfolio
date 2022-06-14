<?php 
session_start();

if(!empty($_SESSION['login'])){ // si la session est bien ouverte, du coup sa affiche cet page-ci 

 ?>

<?php // cette page afficher le backoffice pour ajouter, supprimier, modifier , choisir l'archivage ou non

require_once("connexion_bdd.php");//appeler un fichier php, en loccurence la connexion

$requete = "SELECT * FROM projet"; //on selection tout dans la base de donnee avec le selecteur *
$envoi=$db->prepare($requete); // on prepare la base de donnée pour pouvoir lexecuter par la suite
$envoi->execute(); //on declanche tout ce qu'on a stocker dans les variables

$resultat=$envoi->fetchAll(PDO::FETCH_ASSOC);//on recupere le resultat, on vas stocker dans un tableau associatif

//var_dump sert a afficher le tableau 
/* echo "<pre>";
var_dump($resultat);
"< /pre"; */
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel ="stylesheet" href ="backoffice.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <title>
        Backoffice
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

 <h1>Backoffice</h1>

    <table>
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Lien</th>
            <th>Image</th>
            <th>Etat</th> <!-- Visible ou non--> 
        </thead>
        <tbody>
            <!-- Tableau --> 
            <?php //$resultat peu être changer par article/resultatS avec un s pour quelle soit differente etc..
            foreach($resultat as $article){

            ?> <!-- Eviter de mettre echo dans le html avec la balise < ?=  -->
                <tr>
                    <td>
                         <?= $article["nom"] ?> 
                    </td>

                    <td>
                        <?= $article["description"] ?> 
                    </td> <!-- la balise veut dire php echo pour fair apparaitre un resultat -->

                    <td>
                        <?= $article["lien"] ?>
                    </td>

                    <td>
                    <?= $article["image"] ?>
                    </td>

                    <td>
                    <?= $article["etat"] ?>
                    </td>

                    <td> <!-- Cela permettra a l'administrateur du site de pouvoir supprimer des articles--> 
                        <a href="suppression.php?id=<?= $article["id"] ?>"> Supprimer</a>
                    </td> 

                    <td> <!-- Cela permettra a l'administrateur du site de pouvoir modifier des articles--> 
                        <a href="modif_projet.php?id=<?= $article["id"] ?>"> Modifier </a>
                    </td> 

                    
                </tr> 

            <?php }
            ?>
        </tbody>
    </table>
    <?php 
    
if ($_POST){
    //si les champ du formulaire sont bien rempli 
    if(isset($_POST["nom"]) && !empty($_POST["nom"])
        && isset($_POST["description"]) && !empty($_POST["description"])
        && isset($_POST["lien"]) && !empty ($_POST["lien"])
        && isset($_POST["image"]) && !empty ($_POST["image"])
        && isset($_POST["etat"]) && !empty ($_POST["etat"])
    ){
        $nom = strip_tags($_POST["nom"]);  
        $description =strip_tags($_POST["description"]);
        $lien =strip_tags($_POST["lien"]);
        $image =strip_tags($_POST["image"]);
        $etat =strip_tags($_POST["etat"]);
        $requete = "INSERT INTO projet (nom,description,lien,image,etat)VALUES(:nom,:description,:lien,:image,:etat)";
        //securiser les données
        $envoi=$db->prepare($requete);
        $envoi->bindValue(":nom",$nom);
        $envoi->bindValue(":description",$description);
        $envoi->bindValue(":lien",$lien);
        $envoi->bindValue(":image",$image);
        $envoi->bindValue(":etat",$etat);

        $envoi->execute();
    };
}

?>
<h2> Ajout d'un projet : </h2>
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
        </label>
        <br><br>
        <input type="text" name="image" id="image" required> 
         <br><br>

<!-- a celui qui lira ce code et qui dira que les br ne sont pas une bonne pratique:: JE SAIS -->
<label for="etat">Etat</label><br><br>

<input type="radio" name="etat" id="etat" value="visible"> <label>visible </label>
<input type="radio" name="etat" id="etat" value="invisible"> <label> invisible </label>
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