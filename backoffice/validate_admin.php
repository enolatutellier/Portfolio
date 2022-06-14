<?php //page de connexion administrateur 
session_start();
require("connexion_bdd.php");


    $db = new PDO("mysql:host=$servername;dbname=$database;charset=utf8",$username,$mdp);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


function test_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $admin = test_input($_POST["admin"]);
    $mdp = $_POST["mdp"];

    $pioche = $db->prepare("SELECT * FROM admin"); // elle pioche dans la base de donnée 
    $pioche ->execute();
    $users = $pioche->fetchAll(PDO::FETCH_ASSOC);

    foreach($users as $user){
        if(($user['admin'] == $admin) && password_verify($mdp, $user['mdp'])
        ){
            $_SESSION['login'] = $user['admin'];
            header("location: backoffice.php");
        }else{
            echo "<script language='javascript'>";
            echo "alert(Mot de passe incorrect')";
            echo "</script>";
            die();
        }
    }
}
?> 
