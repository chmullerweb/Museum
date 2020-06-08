<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum - L'art en couleur</title>

    <!-- ////   CSS   //// -->
    <link rel="stylesheet" href="http://localhost/coursphp/museum/templates/site2020/css/cssreset.css">
    <link rel="stylesheet" href="http://localhost/coursphp/museum/templates/site2020/css/style.css">

    <!-- ////   PATTERN   //// -->
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">

    <!-- //// FONT ////-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">

</head>

<body class="grid">

<header class="col12">
        <nav>          
            <ul class="flex">            
                <li><a href="<?php $_url_base?>../index.php">Retour</a></li>
                <li><a href="<?php echo $_url_base . 'administration/connexion_page.php?deconnexion'?>">Se déconnecter</a></li>                
            </ul>
        </nav>
</header>