
<?php 
session_start();

if(!empty($_SESSION['login'])){ // si la session est bien ouverte, du coup sa affiche cet page-ci 

 ?>

<?php
// cette page crée la connexion à la base de donnee
$servername = "localhost";
$database = "portfolio";      // !!!!!!!!!! entrée le nom de la bdd
$username = "root";
$mdp = "root";

//on essaie la connexion avec try 

try{
    $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8",$username,$mdp);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $requete = "SELECT * FROM formulaire"; //on selection tout dans la base de donnee avec le selecteur *
$envoi=$db->prepare($requete); // on prepare la base de donnée pour pouvoir lexecuter par la suite
$envoi->execute(); //on declanche tout ce qu'on a stocker dans les variables

$resultat=$envoi->fetchAll(PDO::FETCH_ASSOC);

}

catch(PDOException $e){ 
    echo "Erreur de connexion :" . $e->getMessage();
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Messagerie
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

 <h1>Messagerie</h1>

    <style> /* css */
        body, html{
            background:grey;
            color:white;
            font-family: 'Cinzel', sans-serif;
        }

        nav li{
  display:inline;
  list-style: none;
}

nav{
    text-align: center;
} 

nav a{
    display: inline-block;
    margin:0 50px;
    color:black;
    font-weight: 600;
    font-size: 1.2rem;
}
        h1{
            text-align: center;
            color:black;
            font-size: 1.8rem;
            font-family: 'Cinzel' , sans-serif;
            margin:52px 0 67px 0;

        }

        table{
            margin:0 0 0 300px;
        }

        thead, td, th{
            background-color: black;
            padding:15px;
        }

        td{
          padding:50px;  
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
            <th>Mail</th>
            <th>Message</th>
        </thead>
        <tbody>
            <!-- Tableau --> 
            <?php //$resultat peu être changer par article/resultatS avec un s pour quelle soit differente etc..
            foreach($resultat as $article){

            ?> <!-- Eviter de mettre echo dans le html avec la balise < ?=  -->
                <tr>
                    <td>
                         <?= $article["Nom"] ?> 
                    </td>

                    <td>
                        <?= $article["Mail"] ?> 
                    </td> <!-- la balise veut dire php echo pour fair apparaitre un resultat -->

                    <td>
                        <?= $article["Message"] ?>
                    </td>

                    <td> <!-- Cela permettra a l'administrateur du site de pouvoir supprimer des articles--> 
                        <a href="suppression_messagerie.php?id=<?= $article["id"] ?>"> Supprimer</a>
                    </td> 
                </tr> 

            <?php }
            ?>
        </tbody>
    </table>
</body>
</html>



<?php 
} 
else{
    echo"interdit"; // protege la page
}
?> 