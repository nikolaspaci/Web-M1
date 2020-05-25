<?php
   $title = "Etudiants";
   $currentPage = "Etudiants";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link rel="stylesheet" href="css/Etudiants.css">
      <script src="js/Etudiants.js"></script>
   </head>
   <body>
      <?php include ("modele/navbar.php") ?>
      <div class="content">
      <h4>Etudiants</h4>
      <p>Vous trouverez l'ensemble des étudiants inscrits en Master MIAGE</p>
      
      <table id="tableEtudiant" class="table table-bordered table-hover" style="width:100%">
            <thead>
               <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Mail</th>
                  <th>Statut</th>
                  <th>Description Stage</th>
               </tr>
            </thead>
         </table>

      </div>
</html>