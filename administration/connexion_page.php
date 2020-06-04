<?php 
include "../config.php";
include "../templates/site2020/include/head.php";
?>

 <body>
  
   <form method="post" action="verif_post.php">
   <div>
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo">
       <br>
   </div>
      
    <div>
       <label for="email">Identifiant</label>
       <input type="text" name="email">
       <br>
   </div>
   
   <div>
       <label for="mdp">Mot de passe :</label>
       <input type="password" name="mdp">
       <br>
   </div>
   
    <button type="submit">Se connecter</button>
    </form>
</body>