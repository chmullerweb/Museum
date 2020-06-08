<?php 

// je sécurise ma connexion à la page administrateur en verifiant que le paramètre de $_SESSION["droit_connexion"] existe. Pour simplifier cette partie et éviter de la répéter. J'ai crée dans mon fichier config.php une fonction verif_connexion()

include "../config.php";
include "../templates/site2020/include/head_form.php";


verif_connexion();


?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
   
    <h1 class="col12 row2 titreAdmin">Bienvenue sur la page admin <span class="pink"><?php echo $_SESSION["pseudo"] ?></span></h1>
    
    <!--Je crée un formulaire qui récupère du texte et une photo. Je précise dans la balise <form> enctype="multipart/form_data" car je vais récupérer plusieurs datas/fichiers-->
    
    <form method="post" action="admin.php" enctype="multipart/form-data" class="col-st3">
    
    <div class="saisieForm pb-10">
        <label for="name">Donne un nouveau nom au musée :</label>
        <input name="name" type="text">
    </div>
    
    <?php
          #Pour que le champ texte s'enregistre dans un fichier sur notre serveur, on utilise la fonction fopen("newFile.txt", "voirPHP a+/w+/r+ etc...") entrée dans une variable $file, fwrite($file, $_POST["valeur_de_attribut_name"]) et fclose($file). Une fois ce "chemin" crée, dès que l'internaute aura cliquer sur "Enregistrer", les données seront envoyées vers un nouveau fichier inscription.txt
          
          #une fois le formulaire envoyé au serveur, il va embarqué avec lui grâce à $_POST, le texte rempli dans la textarea "name". Donc je vérifie si elle existe !
    
        if(!empty($_POST["name"])){
            #je crée mon fichier avec fopen
            $file = fopen("inscription.txt", "w+");
            
            #j'écris dans mon fichier $file, la donnée contenue dans $_POST["name"]
            fwrite($file, $_POST["name"]);
            
            #je ferme mon fichier $file
            fclose($file);
        }
       
            #afficher le texte qui a été envoyé
       ?>
        <div class="saisieForm pb-10">
            <label for="txtSaisie">Vous avez choisi ce nom :
            <input name="txtSaisie" type="text" value="<?php echo file_get_contents(__DIR__ . "/inscription.txt")?>">
            </label>
        </div> 
       
       
    
    
    <div class="saisieForm pb-10">
        <label for="photo">A quoi ressemble ton musée ?</label>
        <!--Je crée un autre input destiné à recevoir des photos/fichiers => type="file"-->
        <input type="file" name="photo_musee">
    </div>
    
    <?php 
        #Si les données textes sont envoyées via $_POST, pour des fichiers, on utilise $_FILES
        
        #Je vérifie que la variable $_FILE existe et que le fichier remis ne génère pas d'erreur
        if(!empty($_FILES["photo_musee"]) && $_FILES["photo_musee"]["error"] == 0){
            
        #Pour que la photo donnée par l'utilisateur s'ajoute à mon dossier template/img, je dois crée un chemin de destination 
            
            #Je commence en précisant le nom du dossier dans lequelle la photo doit se ranger, entré dans une variable $nom_dossier_destination
            $nom_dossier_destination = "../templates/site2020/img";
            
            #Je lui indique de se diriger vers le dossier cité plus haut lors de l'enregistrement (dossier qui est enregistré en dur sur mon disque dur)
            $chemin_dossier_destination = __DIR__ . "/" . $nom_dossier_destination;
            
            #Je paramètre le chemin pour accéder à ce fichier et je précise comment le nommer. 
                //Ici on prend par défaut, le nom de la photo
            /*$chemin_fichier_destination = $chemin_dossier_destination . "/" . $_FILES["photo_musee"]["name"];*/
                // Ici je nomme précisément ma photo pour pouvoir plus facilement l'appeler plus tard en HTML
            $chemin_fichier_destination = $chemin_dossier_destination . "/" . "photo_musee.jpg";
            
            
            #Le chemin étant crée, il faut que j'indique au serveur de bien envoyer l'image vers ce chemin de destination via la fonction move_uploaded_file($_FILES["valeur_attribut_name"]["tmp_name"], $chemin_fichier_destination). Ici la variable permet de renommer le fichier. On ne va pas enregistré le fichier sous "tmp_name" mais sous son "name".
            
            move_uploaded_file($_FILES["photo_musee"]["tmp_name"], $chemin_fichier_destination);
            
        }
        
        
    ?>
    
    <br>
        <button class="validButton" type="submit">Enregistrer </button>
    </form>
    
    
</body>
</html>
