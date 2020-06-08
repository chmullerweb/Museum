<?php include "include/head.php" ?>

<div class="titre col6 pattern-dots-md red max-w-20pc overflow-visible">
        <h1 class="siteName white"><?php echo $nom_du_musee ?></h1>
    </div>

    <div class="col6 claim white">
        <h2><?php echo $contenu_text["accueil"]["claim"]["titre_h2"]?></h2>
        <p><?php echo $contenu_text["accueil"]["claim"]["claim_p"]?></p>
    </div>
    
    <div class="section-couv flex">
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["accueil"]["img_couv_1"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["accueil"]["img_couv_2"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["accueil"]["img_couv_3"]?>" alt="" class="header-pix">
        </div>
        <div class="grayscale">
            <img src="<?php echo $_dossier_template . $contenu_img["accueil"]["img_couv_4"]?>" alt="" class="header-pix">
        </div>
    </div>

    
    <div class="header-txt-bloc flex bg-grey">
        <h3 class="header-txt"><?php echo $contenu_text["accueil"]["expo"]["titre"]?></h3>
        <h4 class="subtitle">Exposition Permanente <?php echo $annee?></h4>
    </div>


    <div class="white artist-txt col3 mg-l30">
        <h2 class="orange"><?php echo $contenu_text["accueil"]["artiste_mois"]["nom"]?></h2>
        <p>Artiste du mois</p>
        <p><?php echo $contenu_text["accueil"]["artiste_mois"]["texte"]?></p>
    </div>

    <div class="row6 col3 btn-artist-bloc mg-l30">
        <button type="button"><a href="tokyoluv.php">En savoir plus</a></button>
    </div>

    <div class="expo-bloc row2 col-st5 col3">
        <p class="expo-txt">Prochaine Exposition - Juin 2020<br>
            <span class="bold">Lumières d'été - Ian Dooley</span>
        </p>
        <p class="expo-txt">Laborum voluptas, cum est culpa consequatur in voluptatem ipsum, saepe non nemo consectetur odio fostrum nihil quae voluptate, nobis labore fugiat excepturi. Consectetur adipisicing elit.<br><br>
            Natus consequuntur totam. Odit ipsumnihil quae voluptate, nobis dolor sit amet, consectetur adipisicing elit. Cum porro labore non laborum, dolorem voluptas, quasi aliquid quos, molestias voluptatibus consectetur. <br><br>
            Consectetur adipisicing elit. Id nihil sed enim odit, porro maxime nobis temporibus impedit dicta? Quos ratione ea non unde officiis aut perspiciatis eveniet in quasi? </p><br>
        <p class="expo-txt italic">
            Beatae in dicta quaerat 2020.
        </p>
    </div>

    <div class="col4 row2">
        <img src="<?php echo $_dossier_template ?>img/ian-dooley-ZLBzMGle-nE-unsplash.jpg" alt="" class="expo-pix">
    </div>
    
    <div class="col3 mg-l30 pix-artist">
        <img src="<?php echo $_dossier_template ?>img/tokyo-luv-CsMNgdHXzFs-unsplash.jpg" alt="" class="artist-pix">
    </div>



<?php include "include/footer.php" ?>


