<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel ="stylesheet" href ="index.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital@1&display=swap');
      </style>

    <title>Portfolio Enola</title>
    
</head>

<body>
  <header class="header"> <!-- A deplacer dans header.php -->

    <!--The trick is create a checkbox with a label, add display:none property to checkbox and modify styles with the pseudoclass :checked-->
      <input type="checkbox" name="Menu" id="menu-button-check">
      <label for="menu-button-check">≡</label>
      <div class="menu">
          <ul>
              <li>
                <a href="#">
                  Accueil
                </a>
              </li>

              <li>
                <a href="#">
                  Projets
                </a>
              </li>

              <li>
                <a href="#">
                  Parcours
                </a>
              </li>

              <li>
                <a href="#">
                  Mon CV
                </a>
              </li>

              <li>
                <a href="#">
                  Contactez-moi
                </a>
              </li>
          </ul>
      </div>
  </header>

    <main>

      
<!------------------- Première SECTION -------------------->
      <section class="section1">
 <img src="img/japonais.png" alt="lettre japonaise" id="japonais" >
        <h1 class="home-title">
          <span>Developpeuse Web</span>
          <span>Enola Tutellier</span>
        </h1>
        
      <div class="cont-projet">

        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front">
              <img src="img/jadoo.PNG" alt="p1" class="projet">
            </div>
            <div class="flip-box-back">
              <h2> Jadoo </h2>
              <br>
              <p>Premier projet réalisé en autonomie,
                apprentissage des langages html et css.
              </p>
            </div>
          </div>
        </div>
  <br><br>

        <div class="flip-box">
          <div class="flip-box-inner">
            <div class="flip-box-front">
              <img src="img/eno&lo.PNG" alt="P2" class="projet" >
            </div>
            <div class="flip-box-back">
              <h2> Agence de voyage </h2>
              <br>
              <p class="p1"> Création d'un site d'agence de voyage
                , promouvoir les voyages avec photo, prix, nombre de personne
                il doit contenir plusieurs catégories de voyage(croisière,
                hôtel, visite guidés..) 
                <BR>
                  Projet réaliser en duo avec <a href="https://github.com/LoloxDev"> Lorris </a>
              </p>
            </div>
          </div>
        </div>
 <br> <br>
 
          <div class="flip-box">
            <div class="flip-box-inner">
              <div class="flip-box-front">
                <img src="img/barber.PNG" alt="Projet 3" class="projet" >
              </div>
              <div class="flip-box-back">
                <h2> Barber </h2>
                <br>
              <p class="p1"> Troisième projet, projet catalogue. Choix du thème 
                  libre. Le choix était de crée un Barber avec un catalogue 
                et des prestations. 
              <br>
                Projet réaliser en duo avec <a href="https://github.com/sgonzalez58"> Sergio </a> 
              </p>
              </div>
            </div>
          </div> 

      </div>
     
      </section>

<!-------------------- Deuxième SECTION --------------------->
      <section class="section2">
        <figure>
          <img src="img/logo/github.png" alt="Icône Github" class="icone">         
          <figcaption> GitHub </figcaption>
          </figure>

          <figure>
          <img src="img/logo/html.png" alt="Icône HTML5" class="icone">
          <figcaption>HTML5</figcaption>
          </figure>

          <figure>
          <img src="img/logo/css-3.png" alt="Icône CSS3"class="icone">
          <figcaption> CSS3 </figcaption>
          </figure>

          <figure>
            <img src="img/logo/icone-wordpress.png" alt="Icône Wordpress" class="icone">
          <figcaption> Wordpress</figcaption>
          </figure>
          
          <figure>
          <img src="img/logo/fichier-php.png" alt="Icône PHP" class="icone">
          <figcaption> PHP</figcaption>
          </figure>

          <figure>
          <img src="img/logo/mysql.png" alt="Icône Mysql" class="icone">
          <figcaption> MySQL</figcaption>
        </figure>
      </section>

<!------------- Toisième SECTION --------------->
      <section class="section3">
        <div class="container3">

          <h3>Présentation</h3>
          
          <article class="presentation">
            <div class="episode__number"></div>
            <div class="episode__content">
              <div class="title">Mon Nom/Prénom </div>
              <div class="story">
                <p class="para1">Enola Tutellier </p>

              </div>
            </div>
          </article>
          
          <article class="presentation">
            <div class="episode__number"></div>
            <div class="episode__content">
              <div class="title">Adresses</div>
              <div class="story">
                <p class="para1"> 2 rue de la barre, 58000 Nevers. </p>
              </div>
            </div>
          </article>
          
          <article class="presentation">
            <div class="episode__number"></div>
            <div class="episode__content">
              <div class="title">Téléphone / Mail </div>
              <div class="story">
                <p  class="para1"> 06.48.59.54.68 </p>
                <p  class="para1">enola.tutellier@hotmail.com</p>
              </div>
            </div>
          </article>
          
        </div>
          <h3 class="center">
      </section>

<!------------------ Quatrième SECTION ----------------------->
    <section class="section4">
              
      <div class="container" id="contact">
        <h2 class="titre-form">
          Me contacter
        </h2>
          <br>
          <!-- Formulaire de contact -->

        <?php 
         // include("recupform.php"); 
        ?> 

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

        <div class="deco">

        </div>
    </section>

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