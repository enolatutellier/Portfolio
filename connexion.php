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
}

/* on stock l'erreur dans la variable $e, pdo exeption recuepre l'erreur pour l'afficher c'est une condition
        catch s'operera si try n'a pas fonctionner comme il 
faut et affichera l'erreur en l'affichant avec echo puis concatene avec le . (point) */ 

catch(PDOException $e){ 
    echo "Erreur de connexion :" . $e->getMessage();
}