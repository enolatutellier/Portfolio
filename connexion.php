<?php 
// ouvertur de la session
session_start();
if(isset($_SESSION['connexion']))
{
   header('Location:compte.php');
}
if(!empty($_POST['mail']))
{
   $pseudo = $_POST['mail'];
   $_SESSION['connexion'];
}

//date dexpiration du cookie
if(!empty($_POST['mail']))
{
   $mail = $_POST['mail'];
   setcookie('mail', $mail, time()+ 365*24*4000);
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel ="stylesheet" href ="connexionphp.css"/>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
    </style>
    <title>Connexion Admin</title>
</head>
    <body>
    <h1> Formulaire de Connexion </h1>
<div id="login">

    <form name='form-login'>
        <span class="fontawesome-user">
        </span>
        <input type="text" id="user" placeholder="user"  pattern="*{1.}[@][a-zA-Z]{2,}\.[a-zA-Z]{2,}" min="7" max="30">

        <span class="fontawesome-lock"></span>
        <input type="password" id="pass" placeholder="pass">

        <input type="submit" value="Connexion">
    </form>
</div>

    <footer>
        <div class="paragraphe"> 
          <a href="index.php" class="para">
           Accueil
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