<?php
session_start();

if(
    isset($_POST["email"]) &&
    isset($_POST["mdp"]) &&
    $_POST["email"] == "descodeuses@gmail.com" &&
    $_POST["mdp"] == "Museum2020"
    ){
    $_SESSION["droit_connexion"] = TRUE;
    $_SESSION["pseudo"] = $_POST["pseudo"];
    header ("location:http://localhost/coursphp/museum/administration/admin.php");
    
} else {
    header ("location:http://localhost/coursphp/museum/administration/connexion_page.php");
};




