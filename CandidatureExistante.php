<!doctype html>
<html lang="fr">
   <head>
   </head>
   <body>
      <div class="content">
      <div class="container">
         <div class="row">
            <div class="col">
               <h4>Candidature actuelle</h4>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Nom</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['Nom'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Prénom</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['Prenom'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Adresse</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['AdresseEmail'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Date de naissance</p>
                     <p class="font-weight-bold"><?php echo date("d/m/Y",strtotime($etudiantExistant['DateNaissance'])) ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Parcours</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['Parcours'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Note en Mathématiques</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['NoteMath'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Note en Informatique</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['NoteInformatique'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Note en Anglais</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['NoteAnglais'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Moyenne générale</p>
                     <p class="font-weight-bold"><?php echo $etudiantExistant['Moyenne'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <label for="LMText">Lettre de motivation</label>
                     <textarea class="form-control" id="LMText" rows="3" disabled><?php echo $etudiantExistant['LettreMotivation'] ?></textarea>
                  </div>
               </div>
            </div>
            <div class="col">
               <h4>Nouvelle candidature</h4>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Nom</p>
                     <p class="font-weight-bold"><?php echo $candidat['InputNom'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Prénom</p>
                     <p class="font-weight-bold"><?php echo $candidat['InputPrenom'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Adresse</p>
                     <p class="font-weight-bold"><?php echo $candidat['InputAdresse'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Date de naissance</p>
                     <p class="font-weight-bold"><?php echo date("d/m/Y",strtotime($candidat['DateNaissanceInput'])) ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Parcours</p>
                     <p class="font-weight-bold"><?php echo $candidat['SelectParcours'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Note en Mathématiques</p>
                     <p class="font-weight-bold"><?php echo $candidat['NoteMathsInput'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Note en Informatique</p>
                     <p class="font-weight-bold"><?php echo $candidat['NoteInfoInput'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <p>Note en Anglais</p>
                     <p class="font-weight-bold"><?php echo $candidat['NoteAnglaisInput'] ?></p>
                  </div>
                  <div class="form-group col">
                     <p>Moyenne générale</p>
                     <p class="font-weight-bold"><?php echo $candidat['NoteMoyenneInput'] ?></p>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col">
                     <label for="LMText">Lettre de motivation</label>
                     <textarea class="form-control" id="LMText" rows="3" disabled><?php echo $candidat['LMText'] ?></textarea>
                  </div>
               </div>
            </div>
         </div>
         <div class='float-right'>
            <button type='button' class='btn btn-secondary pull-right' data-toggle='modal' data-target='#annulerModal'>Annuler</button>
            <button type='button' class='btn btn-danger pull-right' data-toggle='modal' data-target='#supprimerModal'>Supprimer</button>
            <button type='button' class='btn btn-primary pull-right' data-toggle='modal' data-target='#sauvegarderModal'>Sauvegarder</button>
         </div>
         <div class="modal fade" id="annulerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Etes-vous sûr de vouloir annuler ?</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times</span>
                     </button>
                  </div>
                  <div class="modal-footer">
                     <form action="Accueil.php" metho="POST">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary">Oui</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="supprimerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Etes-vous sûr de vouloir supprimer ?</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times</span>
                     </button>
                  </div>
                  <div class="modal-footer">
                     <form action="SuppressionCandidature.php" metho="POST">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary">Oui</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal fade" id="sauvegarderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Etes-vous sûr de vouloir sauvegarder ?</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times</span>
                     </button>
                  </div>
                  <div class="modal-footer">
                     <form action="ChangementCandidature.php" metho="POST">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-primary">Oui</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>