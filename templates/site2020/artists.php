<?php include "include/head.php" ?>

<div class="titre col6 pattern-dots-md red max-w-20pc overflow-visible">
        <h1 class="siteName white"><?php echo $nom_du_musee ?></h1>
    </div>

    <div class="col6 claim white">
        <h2><?php echo $contenu_text["artists"]["claim"]["titre_h2"]?></h2>
        <p><?php echo $contenu_text["artists"]["claim"]["claim_p"]?></p>
    </div>
    
        <form class="row3 col12 flex input-search-bloc">
    <a><img src="<?php echo $_dossier_template ?>img/zoom.png" alt="" class="icone-search"></a>
    <input type="text" placeholder="Photographie, peinture, sculputre..." class="input-search">
        </form>

    <div class="section-couv flex" style="grid-row:4">
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_couv_1"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_couv_2"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_couv_3"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_couv_4"]?>" alt="" class="header-pix">
        </div>
    </div>

    <div class="header-txt-bloc flex bg-grey" style="grid-row:4">
        <h3 class="header-txt">Artistes en exposition</h3>
        <h4 class="subtitle">Saison <?php $annee ?></h4>
    </div>

    <?php 
    foreach ($contenu_text["lesArtistes"] as $unArtisteKey => $infos_artiste){ 
    ?>
        <div class="white artist-txt col3 mg-l30">
        <h2 class="orange mt-0"><?php echo $infos_artiste["nom"]?></h2>
        <p>Artiste du mois</p>
        <p><?php echo $infos_artiste["presentation"]?></p>
    </div>

    <div class="row6 col3 btn-artist-bloc mg-l30">
        <button type="button"><a href="<?php echo $_url_base . "artiste_details.php?artiste=$unArtisteKey"?>">En savoir plus</a></button>
    </div>
    
    <?php
    }
   ?>
    
    <!--    // ARTISTE 1 //    -->
    
    <div class="col3 row9 mg-l30">
        <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_art_1"]?>" alt="" class="artist-pix">
    </div>
     

<!--        // ARTISTE 2 //     -->
    
    <div class="col3 row9 mg-l30">
        <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_art_2"]?>" alt="" class="artist-pix">
    </div>
    
    <!--        // ARTISTE 3 //      -->
    
    <div class="col3 row9 mg-l30">
        <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_art_3"]?>" alt="" class="artist-pix">
    </div>
    
    <!--        // ARTISTE 4 //      -->
    
    <div class="col3 row9 mg-l30">
        <img src="<?php echo $_dossier_template . $contenu_img["artists"]["img_art_4"]?>" alt="" class="artist-pix" style="margin-left:-6px">
    </div>

<?php include "include/footer.php" ?>
