<?php
session_start();

    
$nom_du_musee = "Museum";
#Par défaut le nom_du_musee est "Museum". Seul l'administrateur peut changer le nom à partir du administation/admin
/*
$nom_du_musee = file_get_contents( __DIR__ . "/" . "administration/inscription.txt");
*/

$annee = "2020";

$_dossier_template = "templates/site2020/"; // repertoire dans lequel j'ai mis l'ensemble des gabarits de mon site

$_url_base = "http://localhost/coursphp/museum/";
//  c'est l'url pour accéder à la page d'accueil de mon site.

//ici je crée une fonction qui permet de vérifier si l'utilisateur à le droit de se connecter à des pages administrateurs. Dans ce cas, la fonction dit : si la $_SESSION("droit_connexion") est vide alors l'internaute est redirigé vers la page connexion
function verif_connexion(){
    if(empty($_SESSION["droit_connexion"])){
        header("location:connexion_page.php");
    };
};

