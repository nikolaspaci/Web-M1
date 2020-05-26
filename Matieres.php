<?php
   $title = "Matieres";
   $currentPage = "Matieres";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
      <link rel="stylesheet" href="css/Matieres.css">
      <script src="js/Matieres.js"></script>
   </head>
   <body>
      <?php include ("modele/navbar.php") ?>
      <div class="content">
         <h4>Matières</h4>
         <p>Vous trouverez l'ensemble des matières enseignées lors du cursus MIAGE</p>
         <!--Accordion wrapper-->
         <div class="accordion md-accordion" id="accordionSemestre" role="tablist" aria-multiselectable="true">
            <!-- Accordion card -->
            <div class="card">
               <!-- Card header -->
               <div class="card-header" role="tab" id="headingSemestre1">
                  <a data-toggle="collapse" data-parent="#accordionSemestre" href="#collapseSemestre1" aria-expanded="true"
                     aria-controls="collapseSemestre1">
                     <h5 class="mb-0">
                        Semestre 1 <i class="fas fa-angle-down rotate-icon"></i>
                     </h5>
                  </a>
               </div>
               <!-- Card body -->
               <div id="collapseSemestre1" class="collapse show" role="tabpanel" aria-labelledby="headingSemestre1"
                  data-parent="#accordionSemestre">
                  <div class="card-body">
                     <table id="tableMatiereS1" class="table  table-hover" style="width:100%">
                        <thead>
                           <tr>
                              <th>Matière</th>
                              <th>ECTS</th>
                              <th>Description</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
            </div>
            <!-- Accordion card -->
            <!-- Accordion card -->
            <div class="card">
               <!-- Card header -->
               <div class="card-header" role="tab" id="headingSemestre2">
                  <a data-toggle="collapse" data-parent="#accordionSemestre" href="#collapseSemestre2" aria-expanded="true"
                     aria-controls="collapseSemestre2">
                     <h5 class="mb-0">
                        Semestre 2 <i class="fas fa-angle-down rotate-icon"></i>
                     </h5>
                  </a>
               </div>
               <!-- Card body -->
               <div id="collapseSemestre2" class="collapse show" role="tabpanel" aria-labelledby="headingSemestre2"
                  data-parent="#accordionSemestre">
                  <div class="card-body">
                     <table id="tableMatiereS2" class="table  table-hover" style="width:100%">
                        <thead>
                           <tr>
                              <th>Matière</th>
                              <th>ECTS</th>
                              <th>Description</th>
                           </tr>
                        </thead>
                     </table>
                  </div>
               </div>
            </div>
            <!-- Accordion card -->
         </div>
      </div>
      <!-- Accordion wrapper -->
   </body>
</html>