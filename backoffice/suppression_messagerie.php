<?php 
session_start();

if(!empty($_SESSION['login'])){ // si la session est bien ouverte, du coup sa affiche cet page-ci 

 ?>

<?php // cette page servira a supprimer les id de la bdd // elle n'est pas visible 
if(isset($_GET["id"]) && !empty($_GET["id"])){
    //on se reconnecte a la bdd
    require_once("connexion_bdd.php"); //page de connexion afin de pas re-taper la connexion
   // strip tagg est une fnoction
    $id = strip_tags($_GET["id"]); } //on stock id de facon a proteger des injections de balise
    try{

    $requete = "DELETE FROM formulaire WHERE id=:id";
    $requete = $db->prepare($requete);
   // $requete->bindValue(":id",$id,PDO::PARAM_INT); //pour preciser que ces un nombres entier
   
    $requete->execute([":id"=> $_GET["id"]]);
    $projet = $requete->fetch(PDO::FETCH_ASSOC);
    header ('Location:messagerie.php');

}
catch(PDOException $e){
    echo "Erreur" . $e->getMessage();
}?>    


<?php 
} 
else{
    echo"interdit"; // protege la page
}
?> 