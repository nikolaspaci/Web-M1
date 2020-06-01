<?php
    session_start();
    $nouvelleCandidature=array();
    $nouvelleCandidature = $_SESSION['NouvelleCandidature'];
    unset ( $_SESSION['NouvelleCandidature'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlUpdate="UPDATE etudiant
                SET Nom='" .$nouvelleCandidature['InputNom'] ."',Prenom='" .$nouvelleCandidature['InputPrenom'] ."',AdresseEmail='" .$nouvelleCandidature['InputAdresse'] ."',DateNaissance='" .$nouvelleCandidature['DateNaissanceInput'] ."',Parcours='" .$nouvelleCandidature['SelectParcours'] ."',NoteMath=" .$nouvelleCandidature['NoteMathsInput'] .",NoteInformatique=" .$nouvelleCandidature['NoteInfoInput'] .",NoteAnglais=" .$nouvelleCandidature['NoteAnglaisInput'] .",Moyenne=" .$nouvelleCandidature['NoteMoyenneInput'] .",LettreMotivation='" .$nouvelleCandidature['LMText'] ."'"
                ." WHERE Prenom='" .$nouvelleCandidature['InputPrenom'] ."'
                AND Nom='" .$nouvelleCandidature['InputNom'] ."'
                AND DateNaissance ='" .$nouvelleCandidature['DateNaissanceInput'] ."'";
                
    $connexion->exec($sqlUpdate);

    header("location: Accueil.php");
    exit;
?>