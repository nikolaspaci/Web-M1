<?php
   $title = "Recapitulatif";
   $currentPage = "Recapitulatif";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link rel="stylesheet" href="css/Recapitulatif.css">
      <script src="js/Recapitulatif.js"></script>
   </head>
   <body>
        <?php 
            include ("modele/navbar.php");
            session_start();
            $_SESSION["POSTDATA_Candidature"] = $_POST;
        ?>
        <div class="content">
            <h4>Récapitulatif de la candidature</h4>
            <div class="form-row">
                <div class="form-group col">
                    <p>Nom</p>
                    <p class="font-weight-bold"><?php echo $_POST['InputNom'] ?></p>
                </div>               
                <div class="form-group col">
                    <p>Prénom</p>
                    <p class="font-weight-bold"><?php echo $_POST['InputPrenom'] ?></p>                
                </div>            
            </div>
            <div class="form-row">
                <div class="form-group col-8">
                    <p>Adresse</p>
                    <p class="font-weight-bold"><?php echo $_POST['InputAdresse'] ?></p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-8">
                    <p>Date de naissance</p>
                    <p class="font-weight-bold"><?php echo date("d/m/Y",strtotime($_POST['DateNaissanceInput'])) ?></p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-8">
                    <p>Parcours</p>
                    <p class="font-weight-bold"><?php echo $_POST['SelectParcours'] ?></p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6 col-md-3">
                    <p>Note en Mathématiques</p>
                    <p class="font-weight-bold"><?php echo $_POST['NoteMathsInput'] ?></p>
                </div>
                <div class="form-group col-6 col-md-3">
                    <p>Note en Informatique</p>
                    <p class="font-weight-bold"><?php echo $_POST['NoteInfoInput'] ?></p>
                </div>
                <div class="form-group col-6 col-md-3">
                    <p>Note en Anglais</p>
                    <p class="font-weight-bold"><?php echo $_POST['NoteAnglaisInput'] ?></p>
                </div>
                <div class="form-group col-6 col-md-3">
                    <p>Moyenne générale</p>
                    <p class="font-weight-bold"><?php echo $_POST['NoteMoyenneInput'] ?></p>
                </div>
            </div>
            <div class="form-row">
               <div class="form-group col">
                  <label for="LMText">Lettre de motivation</label>
                  <textarea class="form-control" id="LMText" rows="3" disabled><?php echo $_POST['LMText'] ?></textarea>
               </div>
            </div>
            <div class="float-right">
                <div class="row">
                    <button class="btn btn-secondary pull-right" onclick="history.back();">Retour</button>
                    <form action="SauvegardeCandidature.php" method="POST">                                                      
                        <button type="submit" class="btn btn-primary pull-right ml-1">Sauvegarde</button>
                    <form>
                </div>
            </div>
        </div>
   </body>
</html>