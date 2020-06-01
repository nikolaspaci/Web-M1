<?php
    session_start();
    $etudiantExistant=array();
    $etudiantExistant = $_SESSION['CandidatureExistante'];
    unset ( $_SESSION['CandidatureExistante'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlUpdate="UPDATE etudiant
                SET Nom='" .$etudiantExistant['InputNom'] ."',Prenom='" .$etudiantExistant['InputPrenom'] ."',AdresseEmail='" .$etudiantExistant['InputAdresse'] ."',DateNaissance='" .$etudiantExistant['DateNaissanceInput'] ."',Parcours='" .$etudiantExistant['SelectParcours'] ."',NoteMath=" .$etudiantExistant['NoteMathsInput'] .",NoteInformatique=" .$etudiantExistant['NoteInfoInput'] .",NoteAnglais=" .$etudiantExistant['NoteAnglaisInput'] .",Moyenne=" .$etudiantExistant['NoteMoyenneInput']
                ." WHERE Prenom='" .$etudiantExistant['InputPrenom'] ."'
                AND Nom='" .$etudiantExistant['InputNom'] ."'
                AND DateNaissance ='" .$etudiantExistant['DateNaissanceInput'] ."'";
                
    $connexion->exec($sqlUpdate);

    header("location: http://projetwebmaster/Accueil.php");
    exit;
?>