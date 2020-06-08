<?php 
include "../config.php";
include "../templates/site2020/include/head_form.php";

if(isset($_GET["deconnexion"])){
    unset($_SESSION["droit_connexion"]);
}
?>

<body>

    <div class="titre col6 pattern-dots-md red max-w-20pc overflow-visible">
        <h1 class="siteName white"><?php echo $nom_du_musee ?></h1>
    </div>

    <div class="col6 claim white">
        <h2>Compte Administrateur</h2>
        <p>Bienvenue sur la page administration. Veuillez rentrer les identifiants pour accéder au compte.</p>
    </div>
    
    <div class="blocForm">
    <form method="post" action="verif_post.php">
        <div class="saisieForm">
            <label for="pseudo">Votre pseudo :</label>
            <input type="text" name="pseudo">
            <br>
        </div>

        <div class="saisieForm">
            <label for="email">Identifiant</label>
            <input type="text" name="email">
            <br>
        </div>

        <div class="saisieForm">
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp">
            <br>
        </div>

        <button type="submit" class="connectButton">Se connecter</button>
    </form>
    </div>
    
</body>
