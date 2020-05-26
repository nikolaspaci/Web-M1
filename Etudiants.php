<?php
   $title = "Etudiants";
   $currentPage = "Etudiants";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
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