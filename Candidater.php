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
      <form>
  <div class="form-group">
    <label for="InputNom">Nom</label>
    <input type="text" class="form-control" id="InputNom"  placeholder="Saisir votre nom">
  </div>
  <div class="form-group">
    <label for="InputPrenom">Prenom</label>
    <input type="text" class="form-control" id="InputPrenom" placeholder="Saisir votre prénom">
  </div>
  <div class="form-group">
    <label for="InputAdresse">Adresse</label>
    <input type="text" class="form-control" id="InputAdresse" placeholder="Saisir votre adresse">
  </div>
  <div class="form-group">
  <label for="DateNaissanceInput">Date de naissance</label>
  <input class="form-control" type="date" id="DateNaissanceInput">
</div>

<div class="form-group">
    <label for="SelectParcours">Sélectionner votre parcours</label>
    <select single class="form-control" id="SelectParcours">
      <option>Licence</option>
      <option>DUT</option>
      <option>BTS</option>
    </select>
  </div>

  <div class="form-group">
  <label for="NoteMathsInput">Note en Mathématiques</label>
  <input class="form-control" type="number" id="NoteMathsInput">
</div>


<div class="form-group">
  <label for="NoteAnglaisInput">Note en Anglais</label>
  <input class="form-control" type="number" id="NoteAnglaisInput">
</div>

<div class="form-group">
  <label for="NoteMoyenneInput">Moyenne générale</label>
  <input class="form-control" type="number" id="NoteMoyenneInput">
</div>

<div class="form-group">
    <label for="LMText">Lettre de motivation</label>
    <textarea class="form-control" id="LMText" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="AttachLM">Insérer une lette de motivation</label>
    <input type="file" class="form-control-file" id="AttachLM">
  </div>
  <button type="submit" class="btn btn-primary  float-right">Envoyer votre candidature</button>
</form>
        </div>
   </body>
</html>