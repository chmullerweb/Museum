<div class="row10 musee-pix-bloc col12 pattern-dots-md orange max-w-20pc overflow-visible">
    <img src="<?php echo $_dossier_template ?>img/scott-webb-ab80p262fFM-unsplash.jpg" alt="" class="musee-pix">
<!--
    if empty $_FILES alors echo img... sinon img par defaut
-->
    <!--Par défaut, l'image du musée est celle ci-dessus. Seul l'administrateur peut la changer, depuis la page administation/admin.php-->
<!--
    <img src="<?php echo $_dossier_template ?>img/photo_musee.jpg" alt="" class="musee-pix">
-->
</div>

<footer class="row11 col12" style="display:grid">
    <div class="row11 col3">
        <nav>
          <ul>
           <?php include "navigation.php" ?>
          </ul>
        </nav>
    </div>
    <div class="row11 col3">
        <p class="cond-general"><a href="#">-Conditions générales-</a></p>
    </div>
    <div class="flex row11 col3">
        <ul class="footer-list">
            <li class="bold">Museum - Art en couleurs</li>
            <br>
            <li class="italic">124 Avenue des Beaux-Arts</li>
            <li class="italic">75001 Paris</li>
        </ul>
    </div>
    <div class="row11 col3">
        <p class="bold" id="contact">Contact</p>
        <p>
            <a href="0109452300" class="contact-txt">O1.09.45.23.00</a><br>
            <a href="contact@museumartcolor.com" class="contact-txt">contact@museumartcolor.com</a></p>
    </div>
</footer>


</body>


</html>
