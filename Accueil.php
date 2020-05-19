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
            <div class="descPresentation">
				<p>La 1ère année de Master - Méthodes Informatiques Appliquées pour la Gestion des Entreprises (MIAGE) a pour vocation de former des professionnels et des chercheurs maîtrisant parfaitement l'outil informatique et possédants une bonne connaissance de l'organisation et du fonctionnement de l'entreprise. MIAGE garde un ancrage fort dans le réseau national des MIAGE, qui regroupe l'ensemble des formations analogues dans vingt universités française.</p>
				<ul><li>Utiliser, maîtriser et intégrer les technologies informatique</li><li>D'aborder la modélisation de systèmes d'information et les méthodes de conduites de projet</li><li>Comprendre le fonctionnement des organisations, leurs structures, leurs impératifs stratégiques et l'ensemble des interactions, notamment dans la dimension opérationnelle et humaine</li><li>Apprendre et maîtriser l'anglais et une LV2 obligatoire, avec une certification en anglais par le TOEIC</li></ul>
         
         </div>
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