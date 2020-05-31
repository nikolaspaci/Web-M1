<?php
    session_start();
    $candidat=array();
    $candidat = $_SESSION['GestionCandidat'];
    unset ( $_SESSION['GestionCandidat'] );

    $serveur="localhost";
    $login="root";
    $pass="";

    $connexion=new PDO("mysql:host=$serveur;dbname=MasterApp;",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlUpdate="UPDATE etudiant
                SET Nom='" .$candidat['InputNom'] ."',Prenom='" .$candidat['InputPrenom'] ."',AdresseEmail='" .$candidat['InputAdresse'] ."',DateNaissance='" .$candidat['DateNaissanceInput'] ."',Parcours='" .$candidat['SelectParcours'] ."',NoteMath=" .$candidat['NoteMathsInput'] .",NoteInformatique=" .$candidat['NoteInfoInput'] .",NoteAnglais=" .$candidat['NoteAnglaisInput'] .",Moyenne=" .$candidat['NoteMoyenneInput']
                ." WHERE Prenom='" .$candidat['InputPrenom'] ."'
                AND Nom='" .$candidat['InputNom'] ."'
                AND DateNaissance ='" .$candidat['DateNaissanceInput'] ."'";
                
    $connexion->exec($sqlUpdate);

    header("location: http://projetwebmaster/Accueil.php");
    exit;
?>