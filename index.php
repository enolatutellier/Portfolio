<?php
require_once("connexion_bdd.php");

session_start();

$query = $db->prepare("SELECT * from projet"); //préparation de la requête
$query->execute(); //execution de la requête
$articles = $query->fetchAll(PDO::FETCH_ASSOC); //récupération des informations de la requête
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel ="stylesheet" href ="css/index.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap');
      </style>

    <title>Portfolio Enola</title>
    
</head>

<body>
  <header class="header"> 

    <!--The trick is create a checkbox with a label, add display:none property to checkbox and modify styles with the pseudoclass :checked-->
      <input type="checkbox" name="Menu" id="menu-button-check">
      <label for="menu-button-check">≡</label>
      <div class="menu">

            <ul>
              <li><a href="index.php">Accueil</a></li>

              <li><a href="#section1">Projets</a></li>
        
              <li> <a href="#">Parcours</a></li>
    
              <li><a href="#">Contactez-moi </a> </li>
                
              <li><a href="backoffice/connexion_admin.php">Connexion</a> </li>
                              
            </ul>
      </div>
  </header>

    <main>
<!-- SECTION 0-->
    <section class="section0">
      <div>

      </div>
    </section>

      
<!------------------- Première SECTION -------------------->
      <section class="section1">
        <h1>Projet</h1>
 <img src="img/japonais.png" alt="lettre japonaise" id="japonais">
        
        <div class="container">

          <!--le foreach parcourt les données récuperées dans $articles, un article = $article-->
          <?php foreach ($articles as $article): ?>
            <div class="card">
              <div class="imgBx">
              <img src="img/<?= $article["image"] ?>"> <!--Récuperer l'image de l'article -->
              </div>
              <div class="contentBx">
                <div class="content">
                  <h2><?= $article["nom"] ?></h2>
                  <p><?= $article["description"] ?></p>
                  <a href=<?= $article["lien"]?> target="_blank"> Lien Projet / Binôme </a>
                  <?php if(isset($_SESSION['admin'])): ?> <!--Si la session est admin alors afficher le bouton -->
                   
                    <a href="backoffice/modif_projet.php">Modifier le projet</a>
                    <p><?= $article["etat"] ?></p>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

 <!-- 
  <div class="card">
    <div class="imgBx">
    <img src="img/jadoo.PNG" alt="p1" class="projet jadoo">
    </div>
    <div class="contentBx">
      <div class="content">
        <h2>Projet Jadoo</h2>
        <p> 
          Projet réaliser en autonomie, apprentissage surtout
          du langage html. 
        </p>
        <a href="https://github.com/enolatutellier/"> Mon GitHub </a>
      </div>
    </div>
  </div>

  <br>

  <div class="card">
    <div class="imgBx">
    <img src="img/eno&lo.PNG" alt="P2" class="projet" >
    </div>
    <div class="contentBx">
      <div class="content">
        <h2>Agence de Voyage</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sunt voluptates quam, sed quod earum et alias expedita distinctio ad nam fugiat veritatis a.</p>
        <a href="https://github.com/LoloxDev"> Lorris </a>
      </div>
    </div>
  </div>

 

  <div class="card">
    <div class="imgBx">
    <img src="img/barber.PNG" alt="Projet 3" class="projet" >
    </div>
    <div class="contentBx">
      <div class="content">
        <h2>Catalogue Barber </h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
          Ullam culpa sunt voluptates quam, sed quod earum et alias expedita distinctio ad nam fugiat veritatis a.</p>
          <a href="https://github.com/sgonzalez58"> Sergio </a>
      </div>
    </div>
  </div> 

  <br>

  <div class="card">
    <div class="imgBx">
      <img src="img/projet.jpg" alt="">
    </div>
    <div class="contentBx">
      <div class="content">
        <h2>Projet</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam culpa sunt voluptates quam, sed quod earum et alias expedita distinctio ad nam fugiat veritatis a.</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </div>
</div>

--> 
      </section>

<!-------------------- Deuxième SECTION --------------------->
<section id="slideshow">
                    <h3>Mes compétences </h3>
          <div class="entire-content">
            <div class="content-carrousel">
              
              <figure>
                <img src="img/logo/github.png" alt="Icône Github" class="shadow">         
              </figure>
      
              <figure>
                <img src="img/logo/html.png" alt="Icône HTML5" class="shadow">
              </figure>
      
              <figure>
                <img src="img/logo/css-3.png" alt="Icône CSS3"class="shadow">
              </figure>
      
              <figure>
                <img src="img/logo/icone-wordpress.png" alt="Icône Wordpress" class="shadow">
              </figure>
                
              <figure>
                <img src="img/logo/fichier-php.png" alt="Icône PHP" class="shadow">
              </figure>
      
              <figure>
                <img src="img/logo/mysql.png" alt="Icône Mysql" class="shadow">
              </figure>
        </div>
      </div>


    </section>
<!------------- Toisième SECTION --------------->
      <section class="section3">

     <div class="gradient"></div>
  <div id="card">
    <img src="photomoi" alt="photo"/>
    <h2>Enola Tutellier</h2>
    <p>En formation depuis 07/03/2022 à OnlineForma Pro</p>
    <p>Passionnée de nouvelle technologie quelquel soit le support
      , je souhaitais me convertir vers un metier qui me ressemblais plus .</p>
    <span class="left bottom">tel: 06 48 59</span>
    <span class="right bottom">adress:Nevers 58 000</span>
</div> 
</section>

<!------------------ Quatrième SECTION ----------------------->
    <section class="section4">
              
      <div class="container_form" id="contact">
        <h2 class="titre-form">
          Me contacter
        </h2>
          <br>
          <!-- Formulaire de contact -->


        <form method="POST" action="recupform.php">

          <label for="fname">
            Nom & prénom
          </label>
          <input type="text" id="fname" name="Nom" placeholder="Votre nom et prénom">
    
          <label for="emailAddress">
            Email
          </label>
          <input id="emailAddress" type="email" name="Mail" placeholder="Votre email">
      
          <label for="subject">
            Message
          </label>
          <textarea id="subject" name="Message" placeholder="Votre message" style="height:120px">
          </textarea>
      
          <input type="submit" value="Envoyer">
        </form>
      </div>

      <div class="yinyang"></div>

    </section>

 
<!----------- CNIQUIEME Section -------------------->
    <section class="section5">
      <img src="img/eyehorus.png" alt="oeil d'horus" id="horus">
    </section>
    </main>

<!--------------------- Footer ---------------------->
    <footer>
        <div class="paragraphe"> 
          <a href="#" class="para">
            A Propos
          </a>
          <a href="#" class="para">
            Me rejoindre sur les réseau ! 
          </a>
          <a href="mentions.html" class="para">
            Mentions légales
          </a>
        </div>

      <div class="line-separation"></div>

          <div class="copyright">
            <p class="text">
              © Copyright tout droits reservés 
            </p>
          </div>

          <div class="logos">

            <a href="https://github.com/enolatutellier/enolatutellier">
              <img src="img/logo/github.png" alt="Logo snapchat" class="footer-logo">
            </a>
             <a href="#">
               <img src="img/logo/instagram.png" alt="Logo instagram" class="footer-logo">
              </a>
              <a href="#">
                <img src="img/logo/linkedin.png" alt="Logo linkedin" class="footer-logo">
              </a>

              <a href="#">
                <img src="img/logo/twitter.png" alt="Logo linkedin" class="footer-logo">
              </a>

          </div>
      </div>
    </footer>

</body>
</html>