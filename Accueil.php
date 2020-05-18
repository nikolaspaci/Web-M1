<?php
   $title = "Accueil";
   $currentPage = "Accueil";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link rel="stylesheet" href="css/Accueil.css">
   </head>
   <body>
      <?php include ("modele/navbar.php") ?>
      <div class="content">
         <div id="Presentation">
            <h3>Presentation</h3>
         </div>
         <hr>
         <div id="Caracteristiques">
            <h3>Caracteristiques</h3>
         </div>
         <hr>
         <div id="Embauches">
            <h3>Embauches</h3>
            <div class="contenaireCard">
               <div class="card">
                  <h5 class="card-title">Secteur Bancaire</h5>
                  <div class="company">
                     <img class="card-img-bottom" src="img/logo-societe-generale.png" alt="Card image cap">
                     <img class="card-img-bottom" src="img/BRED.png" alt="Card image cap">
                  </div>
               </div>
               <div class="card">
                  <h5 class="card-title">Secteur Audit</h5>
                  <div class="company">
                  <img class="card-img-bottom" src="img/logo-societe-generale.png" alt="Card image cap">
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div id="Avantages">
            <h3>Avantages</h3>
         </div>
         <hr>
      </div>
   </body>
</html>