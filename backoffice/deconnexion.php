<?php
session_start();
$_SESSION = NULL;
session_destroy();
var_dump($_SESSION);
    header('Location:../index.php');
    
?> 