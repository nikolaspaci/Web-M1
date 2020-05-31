<?php
   $title = "SauvegardeCandidature";
   $currentPage = "SauvegardeCandidature";
   ?>
<!doctype html>
<html lang="fr">
   <head>
      <?php include ("modele/basicHeader.php") ?>
   </head>
   <body>
        <?php 
            include ("modele/navbar.php");
            $serveur="localhost";
            $login="root";
            $pass="";
            session_start();
            $candidat=array();
            $candidat = $_SESSION['POSTDATA_Candidature'];
            unset ( $_SESSION['POSTDATA_Candidature'] );

            $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sqlSelect="SELECT * 
                        FROM etudiant e
                        WHERE e.Prenom='" .$candidat['InputPrenom'] ."'
                        AND e.nom='" .$candidat['InputNom'] ."'
                        AND e.dateNaissance ='" .$candidat['DateNaissanceInput'] ."'";
                        
            $stmt = $connexion->query($sqlSelect);
            if($stmt->rowCount()==0){
                $sqlInsertCandidat="INSERT INTO etudiant(Nom,Prenom,AdresseEmail,DateNaissance,Parcours,NoteMath,NoteInformatique,NoteAnglais,Moyenne,StatusEtudiant)
                            VALUES('" .$candidat['InputNom'] ."','" .$candidat['InputPrenom'] ."','" .$candidat['InputAdresse'] ."','" .$candidat['DateNaissanceInput'] ."','" .$candidat['SelectParcours'] ."'," .$candidat['NoteMathsInput'] ."," .$candidat['NoteInfoInput'] ."," .$candidat['NoteAnglaisInput'] ."," .$candidat['NoteMoyenneInput'] .",'Candidat');";
                $connexion->exec($sqlInsertCandidat);
                echo "<div class='content'>";
                echo    "<h3>Candidature en cours de validation</h3>";
                echo "</div>";
            }else{
                $etudiant=$stmt->fetch();
                if($etudiant['StatusEtudiant']=="Inscrit"){
                    echo "<div class='content'>";
                    echo    "<h3>Erreur : le candidat est déjà inscrit.</h3>";
                    echo "</div>";
                }else{
                    //afficher tableau avec la variable $etudiant exemple : $etudiant['Nom']

                    $_SESSION['GestionCandidat']=$candidat;

                    echo "<div class='content'>";
                    echo    "<div class='float-right'>";
                    echo        "<button type='button' class='btn btn-secondary pull-right' data-toggle='modal' data-target='#annulerModal'>Annuler</button>";
                    echo        "<button type='button' class='btn btn-danger pull-right' data-toggle='modal' data-target='#supprimerModal'>Supprimer</button>";
                    echo        "<button type='button' class='btn btn-primary pull-right' data-toggle='modal' data-target='#sauvegarderModal'>Sauvegarder</button>";
                    echo    "</div>";
                    echo "</div>";
                }
            }
        ?>
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
   </body>
</html>