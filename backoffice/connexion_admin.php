<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel ="stylesheet" href ="logphp.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <title>Connexion Admin</title>
</head>
    <body>
    <h1> Formulaire de Connexion</h1>

    <!-- ajouter une fleche/ retour au site --> 
<div id="login">

    <form name='form-login' method="POST" action="validate_admin.php" >
        <span class="fontawesome-user">
        </span>
        <input type="text" id="admin" placeholder="user" name="admin"  min="7" max="30">

        <span class="fontawesome-lock"></span>
        <input type="password" id="pass" placeholder="pass" name="mdp">

        <input type="submit" value="Connexion" name="Connexion">
    </form>
</div>
 <!-- //password_hash('mdp' , PASSWORD_ARGON2I);  sert à génerer un nouveaux mot de passe scuriser  a entourer de la balise php < ? > --> 
    <footer>
        <div class="paragraphe"> 
          <a href="../index.php" class="para">
           Accueil
          </a>
          <a href="../index.php" class="para">
            Me rejoindre sur les réseaux ! 
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
                <img src="../img/logo/github.png" alt="Logo GitHub" class="footer-logo">
              </a>
              <a href="#">
                <img src="../img/logo/instagram.png" alt="Logo instagram" class="footer-logo">
                </a>
                <a href="#">
                  <img src="../img/logo/linkedin.png" alt="Logo linkedin" class="footer-logo">
                </a>

                <a href="#">
                  <img src="../img/logo/twitter.png" alt="Logo linkedin" class="footer-logo">
                </a>

</div>
      </div>
    </footer>
    </body>

</html>