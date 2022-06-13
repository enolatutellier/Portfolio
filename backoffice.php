<?php // cette page affichera la description et le nom des articles 

require_once("connexion.php");//appeler un fichier php, en loccurence la connexion

$requete = "SELECT * FROM portfolio"; //on selection tout dans la base de donnee avec le selecteur *
$envoi=$db->prepare($requete); // on prepare la base de donnée pour pouvoir lexecuter par la suite
$envoi->execute(); //on declanche tout ce qu'on a stocker dans les variables

$resultat=$envoi->fetchAll(PDO::FETCH_ASSOC);//on recupere le resultat, on vas stocker dans un tableau associatif

//var_dump sert a afficher le tableau 
/* echo "<pre>";
var_dump($resultat);
"< /pre"; */
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cour PHP - Modification, Ajout, Suppression 
    </title>
</head>

<body>
 <h1>Cour sur le php</h1>

 <p>
     Cette page montre le tableau, elle montre aussi l'ajout d'un nouvel article/description..<br>
     elle contient egalement le formulaire
 </p>
 
    <style> /* css */
        body{
            background:grey;
            color:white;
        }

        h1{
            text-align: center;
        }

        thead, td, th{
            background-color: black;
            padding:15px;
        }
        form {
            border: black 1px solid;
            width:fit-content;
            margin:5px;
            position:relative;
        }
        label{
            justify-content: center;
        }

    </style>

    <table>
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>ID</th>
            <th>Suppression</th>
            <th>Modification</th>
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
                        <?= $article["id"] ?>
                    </td>

                    <td> <!-- Cela permettra a l'administrateur du site de pouvoir supprimer des articles--> 
                        <a href="suppression.php?id=<?= $article["id"] ?>"> Supprimer</a>
                    </td> 

                    <td> <!-- Cela permettra a l'administrateur du site de pouvoir modifier des articles--> 
                        <a href="modification.php?id=<?= $article["id"] ?>"> Modifier </a>
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
    ){
        $nom = strip_tags($_POST["nom"]);  
        $description =strip_tags($_POST["description"]);
        // insere les donnee
        $requete = "INSERT INTO exemple (nom,description)VALUES(:nom,:description)";
        //securiser les données
        $envoi=$db->prepare($requete);
        $envoi->bindValue(":nom",$nom);
        $envoi->bindValue(":description",$description);

        $envoi->execute();
    };
}

?>

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
        <button type="submit">
            Envoie
        </button>

    </form>
</body>
</html>