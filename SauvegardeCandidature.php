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

            $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;port=3307",$login,$pass);
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
                echo    "<h4>Candidature en cours de validation</h4>";
                echo "</div>";
            }else{
                $etudiantExistant=$stmt->fetch();
                if($etudiantExistant['StatusEtudiant']=="Inscrit"){
                    echo "<div class='content'>";
                    echo    "<h4>Erreur : le candidat est déjà inscrit.</h4>";
                    echo "</div>";
                }else{
                    include 'CandidatureExistante.php';
                    $_SESSION['CandidatureExistante']=$candidat;
                }
            }
        ?>        
   </body>
</html>