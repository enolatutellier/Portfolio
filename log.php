<?php //page de connexion administrateur 
session_start();
if (isset($_POST['Connexion'])){
    if(!empty($_POST['mail']) && !empty($_POST['mdp'])){
        $mail_par_defaut = "enola.tutellier@hotmail.com";
        $mdp_par_defaut = "root1234";

        $mail_saisi = htmlspecialchars($_POST['mail']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($mail_saisi == $mail_par_defaut && $mdp_saisi == $mdp_par_defaut){
            $_SESSION['admin']['email'] = $mail_saisi;
            header('Location: index.php');
        } else{
            echo" mail ou mot de passe incorrect"; 
        }
    }
}
?>


