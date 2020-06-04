<?php
include "config.php";
include "contenu_text.php";
include "contenu_img.php";

if (isset($contenu_text["lesArtistes"][$_GET["artiste"]])){
    $artiste_a_afficher = $contenu_text["lesArtistes"][$_GET["artiste"]];
    include $_dossier_template . "page_artist.php";
}
else {
    header("Location:$_url_base");
};