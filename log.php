<?php //page de connexion administrateur 
session_start();
if (isset($_POST['Connexion'])){
    if(!empty($_POST['mail']) AND !empty($_POST['mdp'])){
        $mail_par_defaut = "enola.tutellier@hotmail.com";
        $mdp_par_defaut = "root1234";

        $mail_saisi = htmlspecialchars($_POST['mail']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($mail_saisi == $mail_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: index.php');            
        } else{
            echo" mail ou mot de passe incorrect"; 
        }
    }
}
?>


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
    <h1> Formulaire de Connexion </h1>

    <!-- ajouter une fleche/ retour au site --> 
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