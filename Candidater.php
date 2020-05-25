<?php
   $title = "Candidater";
   $currentPage = "Candidater";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
      <link rel="stylesheet" href="css/Candidater.css">
      <script src="js/Candidater.js"></script>
   </head>
   <body>
      <?php include ("modele/navbar.php") ?>
      <div class="content">
      <h4>Candidater</h4>
      <p>Vous souhaitez rejoindre la MIAGE de Dauphine ?</p>
      <p>Postulez dès maintenant !</p>

         <form>
            <div class="form-row">
               <div class="form-group col">
                  <label for="InputNom">Nom</label>
                  <input type="text" class="form-control" id="InputNom"  placeholder="Saisir votre nom">
               </div>
               <div class="form-group col">
                  <label for="InputPrenom">Prenom</label>
                  <input type="text" class="form-control" id="InputPrenom" placeholder="Saisir votre prénom">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-8">
                  <label for="InputAdresse">Adresse</label>
                  <input type="text" class="form-control" id="InputAdresse" placeholder="Saisir votre adresse">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-6">
                  <label for="DateNaissanceInput">Date de naissance</label>
                  <input class="form-control" type="date" id="DateNaissanceInput">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-6">
                  <label for="SelectParcours">Sélectionner votre parcours</label>
                  <select single class="form-control" id="SelectParcours">
                     <option>Licence</option>
                     <option>DUT</option>
                     <option>BTS</option>
                  </select>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-6 col-md-3">
                  <label for="NoteMathsInput">Note en Mathématiques</label>
                  <input class="form-control" type="number" id="NoteMathsInput">
               </div>
               <div class="form-group col-6 col-md-3">
                  <label for="NoteInfoInput">Note en Informatique</label>
                  <input class="form-control" type="number" id="NoteInfoInput">
               </div>
               <div class="form-group col-6 col-md-3">
                  <label for="NoteAnglaisInput">Note en Anglais</label>
                  <input class="form-control" type="number" id="NoteAnglaisInput">
               </div>
               <div class="form-group col-6 col-md-3">
                  <label for="NoteMoyenneInput">Moyenne générale</label>
                  <input class="form-control" type="number" id="NoteMoyenneInput">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col">
                  <label for="LMText">Lettre de motivation</label>
                  <textarea class="form-control" id="LMText" rows="3"></textarea>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col">
                  <label for="AttachLM">Insérer une lette de motivation</label>
                  <input type="file" class="form-control-file" id="AttachLM">
               </div>
            </div>
            <button type="submit" class="btn btn-primary  float-right">Envoyer votre candidature</button>
         </form>
      </div>
   </body>
</html>