<!--
http://localhost/coursphp/museum/page_artists.php?artist=2
-->

<?php    include "include/head.php"; ?>


<div class="titre col6 pattern-dots-md red max-w-20pc overflow-visible">
        <h1 class="siteName white"><?php echo $nom_du_musee ?></h1>
    </div>

    <div class="col6 claim white">
        <h2><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["nom"] ?></h2>
        <p><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["texte_intro"] ?></p>
    </div>

    <div class="section-couv flex">
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_couv_1"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_couv_2"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_couv_3"]?>"alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_couv_4"]?>" alt="" class="header-pix">
        </div>
    </div>

    
    <div class="header-txt-bloc flex bg-grey">
        <h3 class="header-txt"><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["nom_expo"] ?></h3>
        <h4 class="subtitle"><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["date_expo"] ?></h4>
    </div>


    <div class="white artist-txt col3 mg-l30">
        <h2 class="orange">Portrait</h2>
        <p><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["metier"] ?></p>
        <p><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["presentation"] ?></p>
    </div>

    <div class="expo-bloc row2 col-st5 col3">
        <p class="expo-txt">Présentation<br>
            <span class="bold"><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["nom_expo"] . " - " . $contenu_text["lesArtistes"][$_GET["artiste"]]["nom"]?></span>
        </p>
        <p class="expo-txt"><?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["synopsis"] ?></p><br>
        <p class="expo-txt italic">
            <?php echo $contenu_text["lesArtistes"][$_GET["artiste"]]["signature"] ?>
        </p>
    </div>

    <div class="col4 row2">
        <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_main"]?>" alt="" class="expo-pix">
    </div>

    <div class="col3 mg-l30">
        <img src="<?php echo $_dossier_template . $contenu_img["artiste"]["tokyoluv"]["img_profil"]?>" alt="" class="artist-pix">
    </div>
    
    




<?php include "include/footer.php"?>