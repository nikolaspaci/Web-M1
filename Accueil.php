<?php
   $title = "Accueil";
   $currentPage = "Accueil";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link rel="stylesheet" href="css/Accueil.css">
      <script src="js/Accueil.js"></script>
   </head>
   <body>
      <?php include ("modele/navbar.php") ?>
      <div class="content">
         <div id="Presentation">
            <h4>Presentation</h4>
         </div>
         <hr>
         <div id="Caracteristiques">
            <h4>Caracteristiques</h4>
         </div>
         <hr>
         <div id="Embauches">
            <h4>Embauches</h4>
            <div class="contenaireCard">
               <div class="card text-center">
                  <h5 class="card-title">Secteur Bancaire</h5>
                  <div class="company">
                     <img class="card-img-bottom" src="img/logo-societe-generale.png" alt="Card image cap">
                     <img class="card-img-bottom" src="img/BRED.png" alt="Card image cap">
                     <img class="card-img-bottom" src="img/logo-societe-generale.png" alt="Card image cap">
                     <img class="card-img-bottom" src="img/BRED.png" alt="Card image cap">
                  </div>
               </div>
               <div class="card text-center">
                  <h5 class="card-title">Secteur Audit</h5>
                  <div class="company">
                     <img class="card-img-bottom" src="img/logo-societe-generale.png" alt="Card image cap">
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div id="Avantages">
            <h4>Avantages</h4>
         </div>
         <hr>
      </div>
   </body>
</html>