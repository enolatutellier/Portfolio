<?php // cette page servira a supprimer les id de la bdd
if(isset($_GET["id"]) && !empty($_GET["id"])){
    //on se reconnecte a la bdd
    require_once("connexion.php"); //page de connexion afin de pas re-taper la connexion
   // strip tagg est une fnoction
    $id = strip_tags($_GET["id"]); //on stock id de facon a proteger des injections de balise
    $requete = "DELETE FROM exemple WHERE id=:id";
    $envoi = $db->prepare($requete);
    $envoi->bindValue(":id",$id,PDO::PARAM_INT); //pour preciser que ces un nombres entier

    $envoi->execute();

    header("Location:index.php"); 

}
