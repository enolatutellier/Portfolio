<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['admin'])): ?> <!-- Si la session est admin alors afficher ce header -->
              <ul>
              <li>
                <a href="index.php">
                  Accueil
                </a>
              </li>

              <li>
                <a href="#section1">
                  Projets
                </a>
              </li>

              <li>
                <a href="ajout_projet.php">
                  Ajout projet 
                </a>
              </li>

              <li>
                <a href="deconnexion.php">Déconnexion</a>
              </li>
              </ul>
</body>
</html>